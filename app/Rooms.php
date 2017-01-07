<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table    = 'rooms' ;
    protected $fillable = ['name'] ;

    public function room(){
        return $this->hasMany('App\Rooms','room_id') ;
    }

}
