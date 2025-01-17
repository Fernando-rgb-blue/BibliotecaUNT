<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'isbn' => 'required',
            'codigo' => 'required',
            'titulo' => 'required',
            'aniopublicacion' => 'required',
            'ejemplaresdisponibles' => 'required',
            'edicion' => 'required',
            'numeropaginas' => 'required',
            'estadolibro' => 'required'
            //
        ];
    }

    public function messages(): array
    {

        return [
        ];
    }
}
