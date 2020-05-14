<?php

namespace App\Http\Controllers;

use App\questionnaire;
use App\question;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(questionnaire $questionnaire)
    {

        $data = request()->validate([

            'question.question' => 'required',

            'answers.*.answer' => 'required',
            
        ]);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);


        return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function destroy(questionnaire $questionnaire, question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($questionnaire->path());

    }

    public function edit(questionnaire $questionnaire, $id)
    {   

        $question = question::find($id);
        return view('question.edit', compact('question'));

    }

    public function update(questionnaire $questionnaire, Request $request, $id)
    {
        $request->validate([
            'question.question' => 'required',

            'answers.*.answer' => 'required',
        ]);

        $question = question::find($id);
        $question->question =  $request->get('question');
        $question->answer = $request->get('answer');
        $question->save();

        return redirect('/questionnaires/'.$questionnaire->id);
    }

}
