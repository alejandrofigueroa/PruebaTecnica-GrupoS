<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MateriaGrado;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /**
     * Get all of the materiaGrados for the Materia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiaGrados(): HasMany
    {
        return $this->hasMany(MateriaGrado::class, 'materia_id', 'id');
    }
}
