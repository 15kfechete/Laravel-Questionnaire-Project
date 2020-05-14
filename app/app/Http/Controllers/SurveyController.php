<?php

namespace App\Http\Controllers;

use App\questionnaire;


class SurveyController extends Controller
{
    //
    public function show(questionnaire $questionnaire, $slug)
    {   
        $questionnaire->load('questions.answers');

        return view('survey.view', compact('questionnaire'));
    }

    public function store(questionnaire $questionnaire)
    {
        //dd(request()->all());

        $data = request()->validate([
            
            'responses.*.answer_id' => 'required',

            'responses.*.question_id' => 'required',

            'survey.identification' => 'required',
        ]);
 
        $survey = $questionnaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);

        return view('farewell');
    }
}
