<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PacientesMedicos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pacientes-medicos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $first = false;
        $env_update = true;

        $this->call('config:cache'); //limipio y vuelvo a cachear los datos del .env
        $this->line('Let\'s install Pacientes medicos!');
        $this->line(' ');
        
        $example=base_path(".env.example");
        $filename=base_path(".env");
        //verifico si el archivo .env no existe
        if (!file_exists($filename)) {
            copy($example, $filename);
        }

        //comienzo con el ciclo de preguntas
        //primero pregunto si desea hacer composer update                  
        $Composer=$this->ask('You want to run composer update ? (yes/no) ','no');            
        if($Composer== 'yes') {
            $this->info('Installing  composer packages...');
            system('composer update'); 
            $this->info('Installed  composer packages...');
        }

        
        //segundo configurar la base de datos        
        $Database=$this->ask('You want to run Database configuration ? (yes/no) ','no');            
        if($Database== 'yes') {
            $this->info("Database configuration...");
            $dbName = $this->ask('Enter the database name','paciente');
            $dbUser = $this->ask('Enter the database user', 'root');
            $dbPassword = $this->ask('Enter the database password', false);
            if($dbPassword == false) {
                $dbPassword = '';
            }
            // http://laravel-tricks.com/tricks/change-the-env-dynamically
            $env_update = $this->changeEnv([
                'DB_DATABASE'   => $dbName,
                'DB_USERNAME'   => $dbUser,
                'DB_PASSWORD'   => $dbPassword,
            ]);
            
        }

        //tercero configurar el url base
        $APP_URL=ENV('APP_URL');
        if(trim($APP_URL)=='' || $APP_URL=='http://localhost' )
        {
            $APP_URL = $this->ask('Enter APP_URL', 'http://localhost');
            $env_update = $this->changeEnv([
                'APP_URL'   => $APP_URL
            ]);
        }
        //verifico si no occurrio algun error en la actualizacion del archivo .env
        if ( !$env_update ) {
            $this->line('Error an ocurre!');
            return;            
        }

        //cuarto genero el APP_KEY
        $APP_KEY=ENV('APP_KEY');
        if(trim($APP_KEY)==''){
            $this->call('key:generate');
            $first = true;
        } 
        
        //limpiar cache
        $this->call('config:cache');
        
        //migraciones
        $this->call('migrate'); 
        // datos base
        $this->call('db:seed');
        
        $this->line('Tables and fake data were created!');
        
        //vuelvo a limpiar la cache 
        $this->call('config:cache');  
        $this->line('CRUD PACIENTES HOSPITAL INSTALLED!');
    }
    // http://laravel-tricks.com/tricks/change-the-env-dynamically
    protected function changeEnv($data = array()){
        if(count($data) > 0){
 
            $filenameEnv = (file_exists(base_path(".env"))) ? '.env' : '.env.example';
 
            // Read .env-file
            $env = file_get_contents(base_path() . '/'.$filenameEnv);
 
            // Split string on every " " and write into array
            $env = preg_split('/\s+/', $env);;
 
            // Loop through given data
            foreach((array)$data as $key => $value){
 
                // Loop through .env-data
                foreach($env as $env_key => $env_value){
 
                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);
 
                    // Check, if new key fits the actual .env-key
                    if($entry[0] == $key){
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }
 
            // Turn the array back to an String
            $env = implode("\n", $env);
 
            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/'.$filenameEnv, $env);
            
            return true;
        } else {
            return false;
        }
    }
}
