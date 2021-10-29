<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table="education";
    protected $fillable=['year_of_experience','under_graduate','post_graduate','user_id'];


    
    public function registeruser(){
        return $this->belongsTo('App\Registeruser');
    }
}
