<?php

namespace App\Http\Controllers;

use App\questionnaire;


class SurveyController extends Controller
{
    // Show Function
    public function show(questionnaire $questionnaire, $slug)
    {   
        // Loads questions.answers
        $questionnaire->load('questions.answers');
        // Returns View survey.view
        return view('survey.view', compact('questionnaire'));
    }

    // Show Function
    public function store(questionnaire $questionnaire)
    {
        // Validation for each field
        $data = request()->validate([
            
            'responses.*.answer_id' => 'required',

            'responses.*.question_id' => 'required',

            'survey.identification' => 'required',
        ]);
        // Creates data.for surveys
        $survey = $questionnaire->surveys()->create($data['survey']);
        // Creates data for responses
        $survey->responses()->createMany($data['responses']);
        // Returns View to /farewell
        return view('/farewell');
    }
}
