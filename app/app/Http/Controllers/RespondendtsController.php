<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\questionnaire;


class RespondendtsController extends Controller
{
    public function index()
    {
        $questionnaires = questionnaire::all();
        return view('respondendts', compact('questionnaires'));
    }

    public function show(\App\questionnaire $questionnaire)
    {
        $questionnaires->load('questions.answers.responses');
        return view('questionnaire.view', compact('questionnaire'));
    }
}
