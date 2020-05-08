<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class questionnaire extends Model
{
    protected $guarded = [];

    public function path()
    {
        return url('/questionnaires/' . $this->id);
    }

    public function publicPath()
    {
        return url('/surveys/' . $this->id . '-' . Str::slug($this->questionnaireTitle));
    }


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
