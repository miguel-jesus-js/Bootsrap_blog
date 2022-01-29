<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios_blog extends Model
{
    use HasFactory;
    protected $table = 'usuarios_blog';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'sexo',
        'nombre_user',
        'correo',
        'contrasena',
        'foto_perfil'
    ];
}
