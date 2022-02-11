<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;
use App\Models\MateriaGrado;

class Grado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /**
     * Get all of the alumnos for the Grado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos(): HasMany
    {
        return $this->hasMany(Alumno::class, 'grado_id', 'id');
    }

    /**
     * Get all of the materiaGrados for the Grado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiaGrados(): HasMany
    {
        return $this->hasMany(MateriaGrado::class, 'grado_id', 'id');
    }
}
