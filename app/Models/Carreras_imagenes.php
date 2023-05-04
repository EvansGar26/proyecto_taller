<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras_imagenes extends Model
{
    protected $table = 'carreras_imagenes';
    
    protected $fillable = ['carrera_id','ruta','status'];
    
    public function carreras()
    {
        return $this->belongsTo('App\Models\Carreras', 'carrera_id', 'id');
    }
}
