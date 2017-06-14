<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    public function anime()
    {
        return $this->belongsTo('App\Anime');
    }
    public function episode()
    {
        return $this->hasMany('App\Episode');
    }
}
