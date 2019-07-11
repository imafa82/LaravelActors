<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name', 'surname', 'year',
    ];
    public function movies(){
        return $this->hasMany('App\Movie');
    }
}
