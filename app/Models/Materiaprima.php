<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiaprima extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'stock', 'unidadmedida', 'preciounidad'];
}
