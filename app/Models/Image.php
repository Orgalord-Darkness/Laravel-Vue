<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    /**
     * @var array
     */
    protected $fillable = [
        'libelle', 
        'lien', 
        'libre_droit'
    ] ; 

}
