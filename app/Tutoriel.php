<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    
    protected $fillable = [
        'titre',
        'lien',
        'description',
        'tutocategorie_id',
        
    ];

}
