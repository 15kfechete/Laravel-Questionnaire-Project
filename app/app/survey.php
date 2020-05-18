<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    // Guarded Model
    protected $guarded = [];

    // Survey belongs to questionnaure
    public function questionnaire()
    {
        return $this->belongsTo(questionnaire::class);
    }

    // Survey has may responses
    public function responses()
    {
        return $this->hasMany(response::class);
    }
}
