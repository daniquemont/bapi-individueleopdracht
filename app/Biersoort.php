<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biersoort extends Model
{
    protected $table = 'biersoort';
    public $timestamps = false;

    public function getGisting(){
        return $this->belongsTo('App\Gisting', 'gisting', 'gisting');
    }

    public function getBiertjes(){
        return $this->belongsTo('App\Biersoort', 'naam', 'naam');
    }
}
