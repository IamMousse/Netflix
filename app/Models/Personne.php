<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table = 'personnes';
    use HasFactory;

    public function filmsRealises()
    {
        return $this->hasMany(Film::class, 'realisateur_id');
    }
    public function filmsProduits()
    {
        return $this->hasMany(Film::class, 'producteur_id');
    }
}
