<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    // Guarded Model
    protected $guarded = [];
    
    // Question belongs to Questionnaire
    public function questionnaire()
    {
        return $this->belongsTo(questionnaire::class);
    }

    // Question has many Answers
    public function answers()
    {
        return $this->hasMany(answer::class);
    }

    // Question has many Responses
    public function responses()
    {
        return $this->hasMany(response::class);
    }
}
