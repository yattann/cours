<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'titre', 'slug', 'desc', 'photo'
    ];

    public function setSlugAttribute($value)
    {

        if (empty($value)) {

            $this->attributes['slug'] = Str::slug($this->nom);
        }


    }
    public function saison()
    {
        return $this->hasMany('App\Saison');
    }
}
