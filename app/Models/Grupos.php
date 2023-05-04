<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $table = 'grupos';
    
    protected $fillable = ['id_user','nombre','status'];
    
    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'id_user', 'id');
    }
}
