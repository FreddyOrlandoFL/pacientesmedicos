<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;
use DB;

class PatientController extends Controller
{
    public function index(){
        $Patient=Patient::with('AssingDiagnostic','AssingDiagnostic.Diagnostic')->get();
        return response()->json($Patient, 200);
    }
    public function searchpaciente(Request $request){
        $Patient=Patient::with('AssingDiagnostic','AssingDiagnostic.Diagnostic')
        ->where('first_name', 'LIKE', '%'.$request->first_name.'%')
        ->where('last_name', 'LIKE', '%'.$request->last_name.'%')
        ->where('document', 'LIKE', '%'.$request->document.'%')
        ->get();
        return response()->json($Patient, 200);
    }
    public function store(Request $request){

        try{
            $rules=[
                'document' => 'required',
                'first_name'=>'required',
                'last_name'=>'required',
                'birth_date' => 'required|date',
                'email'=>'required|unique:patients',
                'phone' => 'required|max-digits:20|numeric',
                'genre' => 'required',
            ];
    
            $mensajes=[
                'document.required'=>'El documento es obligatorio',
                'first_name.required'=>'El nombre es obligatorio',
                'last_name.required'=>'El apellido es obligatorio',
                'birth_date.required'=>'La fecha es obligatoria',
                'email.required'=>'El email de contacto es obligatorio',
                'email.unique'=>'El email ya se encuentra registrado',
                'phone.required'=>'El telefono es obligatorio',
                'phone.max-digits'=>'El telefono tiene un maximo de 20 digitos',
                'phone.numeric'=>'El telefono solo debe tener numeros',
                
                'genre.required'=>'El genero  es obligatorio',
            ];
            
            $validator = \Validator::make($request->all(), $rules,$mensajes);
            if ($validator->fails()) {
                return response()->json([
                    'status'=>false,
                    'errors'=>$validator->errors()->all()
                ], 419); 
            }
            
            $Registrado=Patient::where('document',$request->document)->count();
            if($Registrado>0){
                return response()->json([
                    'El paciente ya ha sido registrado'
                ], 419);
            }

            $Patient=new Patient();
            $Patient->document=$request->document;
            $Patient->first_name=$request->first_name;
            $Patient->last_name=$request->last_name;
            $Patient->birth_date=$request->birth_date;
            $Patient->email=$request->email;
            $Patient->phone=$request->phone;
            $Patient->genre=$request->genre;
            $Patient->save();

            return response()->json($Patient, 200);

        }catch (Exception $e){
            DB::rollBack();
            \Log::info('Error al registrar la actividad: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }
    public function update(Request $request,$id){

        try{
            $rules=[
                'document' => 'required|unique:patients,document,'. $id,
                'first_name'=>'required',
                'last_name'=>'required',
                'birth_date' => 'required|date',
                'email'=>'required|unique:patients,email,' . $id,
                'phone' => 'required|max-digits:20|numeric',
                'genre' => 'required',
            ];
    
            $mensajes=[
                'document.required'=>'El documento es obligatorio',
                'first_name.required'=>'El nombre es obligatorio',
                'last_name.required'=>'El apellido es obligatorio',
                'birth_date.required'=>'La fecha es obligatoria',
                'email.required'=>'El email de contacto es obligatorio',
                'email.unique'=>'El email ya se encuentra registrado',
                'phone.required'=>'El telefono es obligatorio',
                'phone.max-digits'=>'El telefono tiene un maximo de 20 digitos',
                'phone.numeric'=>'El telefono solo debe tener numeros',
                
                'genre.required'=>'El genero  es obligatorio',
            ];
            
            $validator = \Validator::make($request->all(), $rules,$mensajes);
            if ($validator->fails()) {
                return response()->json([
                    'status'=>false,
                    'errors'=>$validator->errors()->all()
                ], 419); 
            }
            
           
            $Patient=DB::table('patients')
            ->updateOrInsert(
                ['id' => $id],
                [   'document' => $request->document, 
                    'first_name' => $request->first_name, 
                    'last_name' => $request->last_name,
                    'birth_date' => $request->birth_date, 
                    'email' => $request->email, 
                    'phone' => $request->phone, 
                    'genre' => $request->genre, 
                ]
            );
            return response()->json($Patient, 200);

        }catch (Exception $e){
            DB::rollBack();
            \Log::info('Error al registrar la actividad: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }    
}
