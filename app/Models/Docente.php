<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
 protected $table = "docentes";
 protected $primarykey ="id";
 protected $fillable = ['id','id_usuario','nombre','apellido',
 'email','telefono','block','profesional','escalaron','idioma','anios_experiencia','area_trabajo',];
    /* use HasFactory; */
}
