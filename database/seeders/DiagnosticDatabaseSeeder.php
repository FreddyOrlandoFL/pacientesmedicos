<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diagnostic;

class DiagnosticDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Diagnostic=[
            [
                'id'=>'1',
                'name'=>'Infección de orina',
                'description'=>'Infección de orina',
                'created_at'=>'2023-01-07 14:00:00',
                'updated_at'=>'2023-01-07 14:00:00'
            ],
            [
                'id'=>'2',
                'name'=>'Diabetes mellitus tipo II',
                'description'=>'Diabetes mellitus tipo II',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'3',
                'name'=>'Síndrome mieloproliferativo',
                'description'=>'Síndrome mieloproliferativo',
                'created_at'=>'2023-07-13 14:00:00',
                'updated_at'=>'2023-07-13 14:00:00'
            ],
            [
                'id'=>'4',
                'name'=>'Carcinoma de colon',
                'description'=>'Carcinoma de colon',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'5',
                'name'=>'Lipoma',
                'description'=>'Lipoma',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'6',
                'name'=>'Anemia falciforme',
                'description'=>'Anemia falciforme',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'7',
                'name'=>'Leucemia mieloide crónica',
                'description'=>'Leucemia mieloide crónica',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'8',
                'name'=>'Fascitis plantar',
                'description'=>'Fascitis plantar',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],
            [
                'id'=>'9',
                'name'=>'Enfermedad de Chron',
                'description'=>'Enfermedad de Chron',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'10',
                'name'=>'Litiasis renal',
                'description'=>'Litiasis renal',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'11',
                'name'=>'Disenteria amebiana',
                'description'=>'Disenteria amebiana',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'12',
                'name'=>'Carcinoma de páncreas',
                'description'=>'Carcinoma de páncreas',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'13',
                'name'=>'Hiperplasia prostática benigna grado IV',
                'description'=>'Hiperplasia prostática benigna grado IV',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'14',
                'name'=>'Neuralgia del trigémino',
                'description'=>'Neuralgia del trigémino',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'15',
                'name'=>'Sindrome de Guillán Barré',
                'description'=>'Sindrome de Guillán Barré',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'16',
                'name'=>'Insuficiencia respiratoria tipo 1',
                'description'=>'Insuficiencia respiratoria tipo 1',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'17',
                'name'=>'Esquizofrenia',
                'description'=>'Esquizofrenia',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ],[
                'id'=>'18',
                'name'=>'Colangitis esclerozante primaria',
                'description'=>'Colangitis esclerozante primaria',
                'created_at'=>'2023-02-07 14:00:00',
                'updated_at'=>'2023-02-07 14:00:00'
            ]
           
        ];
        foreach($Diagnostic as $Diagnostico)
        {
            $Diagnosticdb = Diagnostic::find($Diagnostico['id']);
            if(!$Diagnosticdb){
                Diagnostic::create($Diagnostico);
            }
        }

    }
}
