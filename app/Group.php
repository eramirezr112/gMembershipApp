<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $table = 'group';
    protected $fillable = array('name');

    public function type() {
        return $this->hasOne('App\Type', 'id', 'type_id');
    }

}
