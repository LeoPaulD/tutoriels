<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuto_categorie extends Model
{
    
    protected $fillable = [
        'titre',
        'description',
    ];

}
