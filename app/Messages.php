<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table    = 'messages';
    protected $fillable = ['msg', 'user_id', 'room_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id') ;
    }

    public function room(){
        return $this->belongsTo('App\Rooms','room_id') ;
    }
}
