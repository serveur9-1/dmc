<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'titreService',
        'descriptionService',
        'contenuService',
        'imageService',
        
    ];
}
