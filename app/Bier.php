<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bier extends Model
{
    protected $table='bier';
    protected $primaryKey = 'naam';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable =
    [
        'naam',
        'merk',
        'alcoholpercentage',
        'kleur_EBC',
        'bitter_EBC',
        'biersoort'
    ];
    
    public function getBiersoort(){
        return $this->hasMany('App\Bier', 'biersoort', 'biersoort');
    } 
}
