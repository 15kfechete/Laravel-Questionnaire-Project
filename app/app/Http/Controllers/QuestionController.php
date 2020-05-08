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


}
