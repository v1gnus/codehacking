<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'status', 'name', 'email', 'password', 'photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){

        return $this->belongsTo('App\Role');

    }


    public function photo(){

        return $this->belongsTo('App\Photo');
        
    }

/*    public function setPasswordAttribute($password){

        if(!empty($password)){

            $this->attributes['password'] = bcrypt($password);

        }
    }*/

    /*public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }*/

    public function isAdmin(){

        if ($this->role->name == "administrator" && $this->status == 1){

            return true;

        }

        return false;

    }

}
