<?php

namespace App\Http\Controllers;

use App\questionnaire;
use App\question;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // Create Function
    public function create(questionnaire $questionnaire)
    {
        // Returns questions.create page
        return view('question.create', compact('questionnaire'));
    }

    // Store Function
    public function store(questionnaire $questionnaire)
    {
        // Validation for each field
        $data = request()->validate([

            'question.question' => 'required',

            'answers.*.answer' => 'required',
            
        ]);

        // Creates Data for Questions
        $question = $questionnaire->questions()->create($data['question']);

        // Creates Data for MAny Answers
        $question->answers()->createMany($data['answers']);

        // Returns questionnaires.id page
        return redirect('/questionnaires/'.$questionnaire->id);
    }

    // Destroy Function
    public function destroy(questionnaire $questionnaire, question $question)
    {
        // Deletes answers
        $question->answers()->delete();
        // Deletes question
        $question->delete();

        // Redirects to Current Page
        return redirect($questionnaire->path());

    }

    // Edit Function
    public function edit(questionnaire $questionnaire, $id)
    {   
        // Finds id of question
        $question = question::find($id);
        // Returns question.edit page
        return view('question.edit', compact('question'));

    }

    // Upadte Function
    public function update(questionnaire $questionnaire, Request $request, $id)
    {
        // Validation for each field
        $request->validate([
            'question.question' => 'required',

            'answers.*.answer' => 'required',
        ]);

        // Finds id of question
        $question = question::find($id);
        // Get Request for question
        $question->question =  $request->get('question');
        // Get Request for answer
        $question->answer = $request->get('answer');
        // Save Changes
        $question->save();

        // Redirects to Current Page
        return redirect('/questionnaires/'.$questionnaire->id);
    }

}
