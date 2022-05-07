<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable = ['nombre','apellido','telefono','direccion','nopase','pase','cedula','hojavida'];
}
