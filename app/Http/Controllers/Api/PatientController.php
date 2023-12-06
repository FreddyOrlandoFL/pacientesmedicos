<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        $Patient= Patient::all();
        return response()->json($Patient, 200);

    }
    public function store(Request $request){

        try{
            $rules=[
                'document' => 'required|unique:patients',
                'first_name'=>'required',
                'last_name'=>'required',
                'birth_date' => 'required|date',
                'email'=>'required|unique:patients',
                'phone' => 'required|max:20|numeric',
                'genre' => 'required',
            ];
    
            $mensajes=[
                'document.required'=>'El documento es obligatorio',
                'first_name.required'=>'El nombre es obligatorio',
                'last_name.required'=>'El apellido es obligatorio',
                'birth_date.required'=>'La fecha es obligatoria',
                'email.required'=>'El email de contacto es obligatorio',
                'phone.required'=>'El telefono es obligatorio',
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
}
