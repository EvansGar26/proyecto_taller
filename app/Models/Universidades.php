<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidades extends Model
{
    protected $table = 'universidades';
    
    protected $fillable = ['id_municipio','nombre','director','direccion','cp','telefono','logotipo','url','status'];
    
    
    public function municipios()
    {
        return $this->belongsTo('App\Models\Municipios', 'id_municipio', 'id');
    }
    
}
