<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnostic extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function assingdiagnostic(){
        return $this->hasMany('App\Models\AssingDiagnostic','diagnostic');
    }
}
