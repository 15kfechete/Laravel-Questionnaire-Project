<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $guarded = [];

    public function questionnaire()
    {
        return $this->belongsTo(questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(answer::class);
    }

    public function responses()
    {
        return $this->hasMany(response::class);
    }
}
