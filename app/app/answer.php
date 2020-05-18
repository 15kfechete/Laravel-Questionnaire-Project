<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    // Guarded Model
    protected $guarded = [];

    // Answer belongs to Question
    public function question()
    {
        return $this->belongsTo(question::class);
    }

    // Answer has many Responses
    public function responses()
    {
        return $this->hasMany(response::class);
    }
}
