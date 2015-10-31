<?php

namespace GlucosioAPI;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('GlucosioAPI\User');
    }

    public function readingtype()
    {
        return $this->belongsTo('GlucosioAPI\Readingtype');
    }
}
