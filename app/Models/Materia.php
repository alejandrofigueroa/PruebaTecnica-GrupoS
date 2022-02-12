<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MateriaGrado;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    
}
