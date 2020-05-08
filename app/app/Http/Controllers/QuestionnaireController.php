<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionnaire.create');
    }

    public function store()
    {
        $data = request()->validate([
            'questionnaireTitle' => 'required',

            'agreementTerms' => 'required',
            
        ]);
    
        $questionnaire = auth()->user()->questionnaire()->create($data);

        return redirect('/questionnaires/'.$questionnaire->id);

    }

    public function show(\App\questionnaire $questionnaire)
    {
        
        $questionnaire->load('questions.answers.responses');

        return view('questionnaire.view', compact('questionnaire'));
    }
}
