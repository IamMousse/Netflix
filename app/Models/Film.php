<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    use HasFactory;
    protected $fillable = ['titre', 'resumer', 'duree', 'annee', 'trailer', 'pochetteURL', 'rating', 'realisateur_id', 'producteur_id', 'genre'];

    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function producteur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function personnes()
    {
        return $this->belongsToMany(Personne::class);
    }

    public function acteur()
    {
        return $this->belongsTo(Personne::class);
    }

}
