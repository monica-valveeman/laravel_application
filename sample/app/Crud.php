<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table='student';
    protected $fillable=['name','mark1','mark2','mark3'];

   public function course(){
        return $this->hasOne('App\Course','s_id');
    } 
    
    /*public function countries(){
        return $this->morphMany('App\Country','countrystuc');
    } */

}
 