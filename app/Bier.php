<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bier extends Model
{

    use SoftDeletes;

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
        'biersoort',
    ];
    
    public function getBiersoort(){
        return $this->hasMany('App\Bier', 'biersoort', 'biersoort');
    } 
}
