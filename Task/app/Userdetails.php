<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    protected $table="userdetails";
    protected $fillable=['profile_upload','date_of_birth','address','state','city','user_id'];


    public function registerusers(){
        return $this->belongsTo('App\Registeruser','user_id');
    }
}
