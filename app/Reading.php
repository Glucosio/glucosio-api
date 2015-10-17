<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function readingtype()
    {
        return $this->belongsTo('App\Readingtype');
    }
}
