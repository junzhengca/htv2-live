<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = ['name', 'start_time', 'end_time',  'description', 'meta', 'tags'];

    public function getMetaAttribute($value){
        return json_decode($value, true);
    }

    public function setMetaAttribute($value){
        $this->attributes['meta'] = json_encode($value);
    }
}
