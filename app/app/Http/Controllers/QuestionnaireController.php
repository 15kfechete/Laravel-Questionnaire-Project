<?php

namespace App\Http\Controllers;

use App\questionnaire;
use App\question;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    // QuestionnaireController constructor for auth middleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Create Function
    public function create()
    {
        // Returns questionnaire.create page
        return view('questionnaire.create');
    }
    // Store Function
    public function store()
    {
        // Validation for each field
        $data = request()->validate([
            'questionnaireTitle' => 'required',

            'agreementTerms' => 'required',
            
        ]);
        // Creates Data for questionnaires
        $questionnaire = auth()->user()->questionnaire()->create($data);
        // Returns questionnaires.id page
        return redirect('/questionnaires/'.$questionnaire->id);

    }
    // Show Function
    public function show(questionnaire $questionnaire)
    {
        // Loads questions.answers.responses
        $questionnaire->load('questions.answers.responses');

        return view('questionnaire.view', compact('questionnaire'));
    }
    // Edit Function
    public function edit($id)
    {   
        // Finds id of questionnaire
        $questionnaire = questionnaire::find($id);
        // Returns questionnaire.edit page
        return view('questionnaire.edit', compact('questionnaire'));

    }
    // Upadte Function
    public function update(Request $request, $id)
    {
        // Validation for each field
        $request->validate([
            'questionnaireTitle' => 'required',

            'agreementTerms' => 'required',
        ]);
        // Finds id of questionnaire
        $questionnaire = questionnaire::find($id);
        // Get Request for questionnaireTitle
        $questionnaire->questionnaireTitle =  $request->get('questionnaireTitle');
        // Get Request for agreementTerms
        $questionnaire->agreementTerms = $request->get('agreementTerms');
        // Save Changes
        $questionnaire->save();
        // Redirects to Home Page
        return redirect('/home');
    }
    // Destroy Function
    public function destroy(questionnaire $questionnaire, question $question)
    {
        // Deletes answers
        $question->answers()->delete();
        // Deletes question
        $question->delete();
        $questionnaire->questions()->delete();
        // Deletes questionnaire
        $questionnaire->delete();
        // Redirects to Home Page
        return redirect('/home');

    }
}
