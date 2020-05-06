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

    public function store()
    {
        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
        ]);
    }
}
