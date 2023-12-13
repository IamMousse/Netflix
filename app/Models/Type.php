<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types_films';
    use HasFactory;

    public function films()
    {
        return $this->hasMany(Film::class, 'type_id');
    }
}
