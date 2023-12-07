<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostic;
use App\Models\AssingDiagnostic;
use App\Models\Patient;
use DB;

class DiagnosticController extends Controller
{
    public function store(Request $request){
        try{
            $rules=[
                'name' => 'required',
                'creation'=>'required|date',
                'patient'=>'required',
            ];
    
            $mensajes=[
                'name.required'=>'El nombre del diagnostico es obligatorio',
                'creation.required'=>'Fecha de creacion del es obligatorio',
                'creation.date'=>'La fecha debe tener un formato timestamp',
                'patient.required'=>'El paciente es obligatorio',
            ];
            
            $validator = \Validator::make($request->all(), $rules,$mensajes);
            if ($validator->fails()) {
                return response()->json([
                    'status'=>false,
                    'errors'=>$validator->errors()->all()
                ], 419); 
            }
            
            $Patient = Patient::where('id',$request->patient)->count();

            if($Patient==0){
                return response()->json([
                    'status'=>false,
                    'errors'=>'El paciente no se encuentra registrado'
                ], 419); 
            }

            $Diagnostic=new Diagnostic();
            $Diagnostic->name=$request->name;
            if(isset($request->description)){
                $Diagnostic->description=$request->description;
            }

            $Diagnostic->save();
            

            $AssingDiagnostic=new AssingDiagnostic();
            $AssingDiagnostic->patient=$request->patient;
            $AssingDiagnostic->diagnostic=$Diagnostic->id;
            $AssingDiagnostic->observation=$request->name;
            if(isset($request->creation)){
                $AssingDiagnostic->creation=$request->creation;
            }
            
            $AssingDiagnostic->save();

            return response()->json($Patient, 200);

        }catch (Exception $e){
            DB::rollBack();
            \Log::info('Error al registrar la actividad: '.$e);
            return \Response::json(['created' => false], 500);
        }
    } 
    public function diagnosticoasignados(){
        $FechaActual=date('Y-m-d');
        $SeisMeses = strtotime('-180 day', strtotime($FechaActual));
        $SeisMeses = date('Y-m-d',$SeisMeses);
     
        $Diagnostic=AssingDiagnostic::
        select(DB::raw('diagnostics.name,count(diagnostics.id) as  cantidad'))
        ->join('diagnostics','diagnostics.id','=','assing_diagnostics.diagnostic')
        ->whereBetween('creation', [$SeisMeses, $FechaActual])
        ->orderby('cantidad','DESC')
        ->take(5)
        ->groupBy('diagnostics.name')
        ->get();
      
        return response()->json($Diagnostic, 200);
    }   
}
