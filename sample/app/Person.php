<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='Persons';
    protected $fillable=['FirstName','LastName','mail','img'];
}
