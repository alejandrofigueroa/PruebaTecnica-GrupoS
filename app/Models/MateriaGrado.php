<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grado;
use App\Models\Materia;


class MateriaGrado extends Model
{
    use HasFactory;

    protected $table = 'materias_grados';

    protected $fillable = ['grado_id', 'materia_id']; 

    
}
