<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras_favoritas extends Model
{
    use HasFactory;

    protected $table = 'carreras_favoritas';
    
    protected $fillable = ['id_user','id_carrera'];
    
    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'id_user', 'id');
    }

    public function carreras()
    {
        return $this->belongsTo('App\Models\Carreras', 'id_carrera', 'id');
    }
}
