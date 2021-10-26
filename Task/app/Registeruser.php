<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Registeruser extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table="registerusers";
    protected $fillable=['firstname','lastname','email_id','password'];
}
