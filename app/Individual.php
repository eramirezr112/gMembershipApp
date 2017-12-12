<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $table = 'person';
    protected $fillable = array('name', 'lastName', 'email');
}
