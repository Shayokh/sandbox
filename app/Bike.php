<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bike extends Model
{
    use SoftDeletes;

    protected $fillable = ['id'];

    public function category () {
        return $this->belongsTo('App\Category');
    }
}
