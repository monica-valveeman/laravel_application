<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table="countries";
    protected $fillable=['name','countrystuc_id','countrystuc_type'];

    public function countrystuc(){
        return $this->morphTo();
    }
}
