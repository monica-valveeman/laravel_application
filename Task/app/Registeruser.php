<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Registeruser extends Authenticatable
{
    protected $table="registerusers";
    protected $fillable=['firstname','lastname','email_id','password'];


    public function details(){
        return $this->hasMany('App\Usedetails');
    }

    public function education(){
        return $this->hasMany('App\Education');
    }
}
