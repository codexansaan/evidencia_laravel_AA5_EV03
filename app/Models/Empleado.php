<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nombres','apellidos','cedula', 'cargo','salario', 'turno','fechaingreso','fotocarnet'];
    protected $dates = ['deleted_at'];
}
