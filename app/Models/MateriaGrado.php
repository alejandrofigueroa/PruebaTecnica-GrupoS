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

    /**
     * Get the materias associated with the Materia_Grado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materias(): HasOne
    {
        return $this->hasOne(Materia::class, 'id', 'materia_id');
    }

    /**
     * Get the grados associated with the Materia_Grado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grados(): HasOne
    {
        return $this->hasOne(Grado::class, 'id', 'grado_id');
    }
}
