<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssingDiagnostic extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'patient', 
        'diagnostic',
        'observation',
        'creation'    
    ];
    public function diagnostic(){
        return $this->belongsTo('App\Models\Diagnostic','diagnostic','id');
    }
    public function patient(){
        return $this->belongsTo('App\Models\Patient','patient','id');
    }
   
}
