<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class admin extends Authenticatable 
{
    protected $table = 'admins';
    //protected $guard = "admins";
    protected $fillable = [
        'name', 'email', 'password',
    ];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
