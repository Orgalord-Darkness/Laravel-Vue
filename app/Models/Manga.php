<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    /**
     * Les attributs 
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'synopsis',
        'image_id', 
        'limite_age',
        'auteur',
        'prix', 
    ]; 


    public function image() { 
        return $this->belongsTo(Image::class, 'image_id'); 
    }
}
