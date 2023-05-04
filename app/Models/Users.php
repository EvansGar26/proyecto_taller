<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    
    protected $fillable = ['nombre','ap_pat','ap_mat','email','telefono','direccion','id_municipio','id_rol','colonia','cp','fecha_naci','username','password','status'];
    
    
    public function municipios()
    {
        return $this->belongsTo('App\Models\Municipios', 'id_municipio', 'id');
    }
    
    public function roles()
    {
        return $this->belongsTo('App\Models\Roles', 'id_rol', 'id');
    }
}
