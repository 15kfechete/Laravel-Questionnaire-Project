<?php

namespace App\Http\Controllers;

use App\questionnaire;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function show(questionnaire $questionnaire, $slug)
    {
        return view('survey.view', compact('questionnaire'));

        $questionnaire->load('questions.answers');
    }
}
