<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferencias_grupos extends Model
{
    protected $table = 'conferencias_grupos';
    
    protected $fillable = ['id_conferencia','id_grupo'];
    
    public function conferencia()
    {
        return $this->belongsTo('App\Models\Conferencias', 'id_conferencia', 'id');
    }

    public function grupo()
    {
        return $this->belongsTo('App\Models\Grupos', 'id_grupo', 'id');
    }
}
