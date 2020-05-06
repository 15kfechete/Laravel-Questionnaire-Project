<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    //
    protected $guarded = [];

    public function survey()
    {
        return $this->belongsTo(survey::class);
    }

}
