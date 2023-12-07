<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $Patient=[
            [
                'id'=>'1',
                'document'=>'15575552',
                'first_name'=>'Freddy Orlando',
                'last_name' => 'Figueroa Lara',
                'birth_date' => '1982-03-08',
                'email' => 'freddyorlandofl@gmail.com',
                'phone' => '584123756093',
                'genre' => 'Male',
                'created_at'=>'2023-01-07 14:00:00',
                'updated_at'=>'2023-01-07 14:00:00'
            ],
            [
                'id'=>'2',
                'document'=>'13772817',
                'first_name'=>'Milagros Del Valle',
                'last_name' => 'Figueroa Lara',
                'birth_date' => '1978-03-31',
                'email' => 'milagorsdelvfl@gmail.com',
                'phone' => '584121875999',
                'genre' => 'Female',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'3',
                'document'=>'17218234',
                'first_name'=>'Francisco Antonio',
                'last_name' => 'Carrion Gomez',
                'birth_date' => '1987-07-13',
                'email' => 'carrionfn@gmail.com',
                'phone' => '584128778495',
                'genre' => 'Male',
                'created_at'=>'2023-07-13 14:00:00',
                'updated_at'=>'2023-07-13 14:00:00'
            ],
            [
                'id'=>'4',
                'document'=>'17800915',
                'first_name'=>'Glennys Del Valle',
                'last_name' => 'Carrera Veliz',
                'birth_date' => '1985-07-13',
                'email' => 'glenca@gmail.com',
                'phone' => '584248440068',
                'genre' => 'Female',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'5',
                'document'=>'14144016',
                'first_name'=>'MIGUEL ANDRES',
                'last_name' => 'CONTRERAS MARTINEZ',
                'birth_date' => '1986-07-13',
                'email' => 'contrerasmiguel@gmail.com',
                'phone' => '584147891865',
                'genre' => 'Male',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'6',
                'document'=>'18900756',
                'first_name'=>'Miguel Orlando',
                'last_name' => 'Lara Rodriguez',
                'birth_date' => '1980-03-20',
                'email' => 'miguellara@gmail.com',
                'phone' => '584126696762',
                'genre' => 'Male',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ]
           
        ];
        foreach($Patient as $Paciente)
        {
            $Patientdb = Patient::find($Paciente['id']);
            if(!$Patientdb){
                Patient::create($Paciente);
            }
        }
    }
}
