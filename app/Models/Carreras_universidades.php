<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras_universidades extends Model
{
    protected $table = 'carreras_universidades';
    
    protected $fillable = ['id_carrera','id_universidad'];
    
    public function carreras()
    {
        return $this->belongsTo('App\Models\Carreras', 'id_carrera', 'id');
    }

    public function universidades()
    {
        return $this->belongsTo('App\Models\Universidades', 'id_universidad', 'id');
    }
}
