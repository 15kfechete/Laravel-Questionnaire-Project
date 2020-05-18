<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    // Guarded Model
    protected $guarded = [];

    // Response belongs to Survey
    public function survey()
    {
        return $this->belongsTo(survey::class);
    }

}
