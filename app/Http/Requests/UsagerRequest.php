<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**djsjsdj
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
        [
            
            'nom_usager' => 'required|min:3',
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|min:5',
            'password' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return
        [
            
            'nom_usager.required' => 'Erreur nom_usager',
            'nom.required' => 'Erreur nom ',
            'prenom.required' => 'Erreur prenom',
            'email.required' => 'Erreur email',
            'password.required' => 'Erreur password',
            'nom_usager.min' => 'Erreur nom_usager minimum 3 caractère',
            'nom.min' => 'Erreur nom minimum 3 caractère',
            'prenom.min' => 'Erreur prenom minimum 3 caractère',
            'email.min' => 'Erreur email minimum 5 caractère',
            'password.min' => 'Erreur password minimum 3 caractère',
        ];
    }
}
