<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssingDiagnostic;

class AssingDiagnosticDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $AssingDiagnostic=[
            [
                'id'=>'1',
                'patient'=>'1',
                'diagnostic'=>'1',
                'observation'=>'Infección de orina',
                'creation'=>'2023-08-07',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'2',
                'patient'=>'1',
                'diagnostic'=>'5',
                'observation'=>'L.O.E SOLIDO (LIPOMA) DE TEJIDOS BLANDOS HEMITORAX POSTERIOR IZQUIERDO SUBCOSTAL',
                'creation'=>'2023-10-12',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'3',
                'patient'=>'1',
                'diagnostic'=>'5',
                'observation'=>'L.O.E SOLIDO TEJIDOS BLANDOS EN REGION CERVICAL (LIPOMA)',
                'creation'=>'2023-09-27',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'4',
                'patient'=>'1',
                'diagnostic'=>'8',
                'observation'=>'Facitis plantar',
                'creation'=>'2023-11-27',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'5',
                'patient'=>'2',
                'diagnostic'=>'5',
                'observation'=>'Lipoma',
                'creation'=>'2023-11-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'6',
                'patient'=>'2',
                'diagnostic'=>'1',
                'observation'=>'Infección de orina',
                'creation'=>'2023-10-20',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'7',
                'patient'=>'2',
                'diagnostic'=>'8',
                'observation'=>'Facitis Plantar',
                'creation'=>'2023-09-11',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'8',
                'patient'=>'3',
                'diagnostic'=>'8',
                'observation'=>'Facitis Plantar',
                'creation'=>'2023-08-18',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'id'=>'9',
                'patient'=>'3',
                'diagnostic'=>'5',
                'observation'=>'L.O.E SOLIDOS DE TEJIDOS BLANDOS',
                'creation'=>'2023-08-18',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'10',
                'patient'=>'4',
                'diagnostic'=>'2',
                'observation'=>'Diabetes',
                'creation'=>'2023-09-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'11',
                'patient'=>'5',
                'diagnostic'=>'2',
                'observation'=>'Diabetes',
                'creation'=>'2023-10-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'12',
                'patient'=>'6',
                'diagnostic'=>'2',
                'observation'=>'Diabetes',
                'creation'=>'2023-11-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'13',
                'patient'=>'6',
                'diagnostic'=>'1',
                'observation'=>'Infeccion de orina',
                'creation'=>'2023-12-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'14',
                'patient'=>'5',
                'diagnostic'=>'1',
                'observation'=>'Infeccion de orina',
                'creation'=>'2023-11-24',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'15',
                'patient'=>'4',
                'diagnostic'=>'1',
                'observation'=>'Infeccion de orina',
                'creation'=>'2023-10-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'16',
                'patient'=>'3',
                'diagnostic'=>'1',
                'observation'=>'Infeccion de orina',
                'creation'=>'2023-09-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],[
                'id'=>'17',
                'patient'=>'2',
                'diagnostic'=>'1',
                'observation'=>'Infeccion de orina',
                'creation'=>'2023-08-01',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
           ],[
                'id'=>'18',
                'patient'=>'1',
                'diagnostic'=>'1',
                'observation'=>'Infeccion de orina',
                'creation'=>'2023-09-01',
          
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
           ],[
            'id'=>'19',
            'patient'=>'3',
            'diagnostic'=>'4',
            'observation'=>'Carcinoma de Colon',
            'creation'=>'2023-09-01',
      
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
           ],[
            'id'=>'20',
            'patient'=>'2',
            'diagnostic'=>'6',
            'observation'=>'Anemia falciforme',
            'creation'=>'2023-09-01',
      
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],[
            'id'=>'21',
            'patient'=>'4',
            'diagnostic'=>'7',
            'observation'=>'Leucemia mieloide crónica',
            'creation'=>'2023-09-01',
      
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],[
            'id'=>'22',
            'patient'=>'6',
            'diagnostic'=>'7',
            'observation'=>'Leucemia mieloide crónica',
            'creation'=>'2023-10-01',
      
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],[
            'id'=>'23',
            'patient'=>'5',
            'diagnostic'=>'7',
            'observation'=>'Leucemia mieloide crónica',
            'creation'=>'2023-10-01',
      
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]
           
        ];
        foreach($AssingDiagnostic as $AssingDiagnostico)
        {
            $AssingDiagnosticdb = AssingDiagnostic::find($AssingDiagnostico['id']);
            if(!$AssingDiagnosticdb){
                AssingDiagnostic::create($AssingDiagnostico);
            }
        }

    }
}
