<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo' => ['required','string','unique:alumnos'],
            'nombre' => ['required','string'], 
            'edad' => ['required','numeric','min:0'], 
            'sexo' => ['required','string'], 
            'grado_id' => ['required','string'], 
            'observacion' => ['required','string']   
        ];
    }
}
