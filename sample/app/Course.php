<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table="courses";
    protected $fillable=['cname','s_id'];

    public function crud(){
        return $this->belongsTo('App\Crud','s_id');
    }

   /* public function countries(){
        return $this->morphMany('App\Country','countrystuc');
    }
    */
}
