<?php

namespace pokemon;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'description', 'avatar'];
    public function getRouteKeyName(){
        return 'slug';
    }
}
