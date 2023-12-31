<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonnesRequest extends FormRequest
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
            'nom' => 'required|max:100',
            'dateN' => 'required|date',
            'dateDece' => 'required|date',
            'sexe' => 'required|max:100',
            'metier' => 'required|max:100',
            'photo' => 'max:1000',
        ];
    }
    public function messages()
    {
        return
        [
            'nom.max' => 'Erreur',
            'dateN.date' => 'Erreur',
            'dateDece.date' => 'Erreur',
            'sexe.max' => 'Erreur',
            'metier.max' => 'Erreur',
            'photo.max' => 'Erreur',
        ];
    }
}
