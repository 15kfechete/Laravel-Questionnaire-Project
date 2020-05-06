<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionnaire extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(question::class);
    }

    public function surveys()
    {
        return $this->hasMany(survey::class);
    }
}
