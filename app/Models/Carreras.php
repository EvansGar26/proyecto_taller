<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    protected $table = 'carreras';
    
    protected $fillable = ['nombre','objetivo','descripcion','perfil_ingreso','perfil_egreso','campo_laboral','status','tipo'];
    
}
