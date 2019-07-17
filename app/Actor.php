<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name', 'surname', 'year', 'photo'
    ];
    public function movies(){
        return $this->hasMany('App\Movie');
    }

    public function getPathAttribute(){
        $url = $this->photo;
        if(!stristr($url, 'http')){
            $url = '/storage/'.$this->photo;
        }
        return $url;
    }
}
