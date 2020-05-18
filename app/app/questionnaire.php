<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class questionnaire extends Model
{
    // Guarded Model
    protected $guarded = [];

    // Private Path function which returns Specific Questionnaires
    public function path()
    {
        return url('/questionnaires/' . $this->id);
    }

    // Public Path function which returns Specific Surveys
    public function publicPath()
    {
        return url('/surveys/' . $this->id . '-' . Str::slug($this->questionnaireTitle));
    }

    // Questionnaire belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Questionnaire has many Questions
    public function questions()
    {
        return $this->hasMany(question::class);
    }

    // Questionnaire has many surveys
    public function surveys()
    {
        return $this->hasMany(survey::class);
    }
}
