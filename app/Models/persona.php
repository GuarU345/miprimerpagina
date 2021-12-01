<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table='personas';
    protected $fillable=['nombre','telefono','correo','id_puesto','id_departamento'];
}
