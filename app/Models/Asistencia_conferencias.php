<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia_conferencias extends Model
{
    use HasFactory;

    protected $table = 'asistencia_conferencias';
    
    protected $fillable = ['id_user','id_conferencia'];
    
    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'id_user', 'id');
    }

    public function conferencias()
    {
        return $this->belongsTo('App\Models\Conferencias', 'id_conferencia', 'id');
    }
}
