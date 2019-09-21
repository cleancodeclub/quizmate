<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function category()
    {
        $this->belongsTo('App\Category');
    }

    public function answer()
    {
        $this->hasOne('App\Answer');
    }
}
