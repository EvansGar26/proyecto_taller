<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidades_imagenes extends Model
{
    protected $table = 'universidades_imagenes';
    
    protected $fillable = ['id_universidad','ruta','status'];
    
    public function universidades()
    {
        return $this->belongsTo('App\Models\Universidades', 'id_universidad', 'id');
    }
}
