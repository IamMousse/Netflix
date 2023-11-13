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
            'genre' => 'required|min:5',
            'resumer' => 'required|min:5',
            'trailer' => 'required|min:5',
            'pochetteURL' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return
        [
            'titre.required' => 'Erreur',
            'titre.min' => 'Erreur',
            'duree.required' => 'Erreur',
            'duree.min' => 'Erreur',
            'annee.required' => 'Erreur',
            'annee.integer' => 'Erreur',
            'rating.required' => 'Erreur',
            'rating.integer' => 'Erreur',
            'genre.required' => 'Erreur',
            'genre.min' => 'Erreur',
            'resumer.required' => 'Erreur',
            'resumer.min' => 'Erreur',
            'trailer.required' => 'Erreur',
            'trailer.min' => 'Erreur',
            'pochetteURL.required' => 'Erreur',
            'pochetteURL.min' => 'Erreur',
        ];
    }
}
