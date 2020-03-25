<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gisting extends Model
{
    protected $table = 'gisting';
    public $timestamps = false;

    public function getBiersoorten(){
        return $this->hasMany('App\Biersoort', 'gisting', 'gisting');
    }
}
