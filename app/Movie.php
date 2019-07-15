<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'description', 'year', 'actor_id'
    ];
    public function actor(){
        return $this->belongsTo('App\Actor');
    }
}
