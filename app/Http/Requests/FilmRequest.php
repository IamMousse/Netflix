<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required|min:3',
            'duree' => 'required|integer',
            'annee' => 'required|integer',
            'rating' => 'required|integer',
            'resumer' => 'required|min:5',
            'trailer' => 'required|min:5',
            'pochetteURL' =>'required|image|mimes:png,jpeg,jpg,gif|max:4096',
        ];
    }

    public function messages()
    {
        return
        [
            'titre.required' => 'Erreur Il faut mettre un titre',
            'titre.min' => 'Erreur Il faut mettre un titre de minmum 3 caratere',
            'duree.required' => 'Erreur Il faut une duree',
            'duree.min' => 'Erreur Il faut une duree en nombre',
            'annee.required' => 'Erreur Il faut une année',
            'annee.integer' => 'Erreur Il faut une année en nombre',
            'rating.required' => 'Erreur rating obligatoire',
            'rating.integer' => 'Erreur rating en nombre',
            'resumer.required' => 'Erreur résumer obligatoire',
            'resumer.min' => 'Erreur minimum 5 caractères pour le résumer',
            'trailer.required' => 'Erreur trailer obligatoire',
            'trailer.min' => 'Erreur minimum 5 caractères pour le trailer',
            'pochetteURL.mimes' => 'Le type de fichier n\'est pas reconnu (png, jpg, gif).',
            'pochetteURL.max' => 'La taille de l\'image ne peut pas dépasser 4096Kb.',
            
        ];
    }
}
