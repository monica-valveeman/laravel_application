<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registeruser extends Model
{
    protected $table="registerusers";
    protected $fillable=['firstname','lastname','email_id','password'];
}
