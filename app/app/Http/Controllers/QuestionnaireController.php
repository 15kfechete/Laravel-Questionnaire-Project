<?php

namespace App\Http\Controllers;

use App\questionnaire;
use App\question;

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

    public function show(questionnaire $questionnaire)
    {
        
        $questionnaire->load('questions.answers.responses');

        return view('questionnaire.view', compact('questionnaire'));
    }

    public function edit($id)
    {   

        $questionnaire = questionnaire::find($id);
        return view('questionnaire.edit', compact('questionnaire'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'questionnaireTitle' => 'required',

            'agreementTerms' => 'required',
        ]);

        $questionnaire = questionnaire::find($id);
        $questionnaire->questionnaireTitle =  $request->get('questionnaireTitle');
        $questionnaire->agreementTerms = $request->get('agreementTerms');
        $questionnaire->save();

        return redirect('/home');
    }

    public function destroy(questionnaire $questionnaire, question $question)
    {
        $question->answers()->delete();
        $question->delete();
        $questionnaire->questions()->delete();
        $questionnaire->delete();

        return redirect('/home');

    }
}
