<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\questionnaire;


class RespondendtsController extends Controller
{
    // Index Function
    public function index()
    {
        // Calls all questionnaires
        $questionnaires = questionnaire::all();
        
        // Return View Respondents
        return view('respondendts', compact('questionnaires'));
    }
    // Show Function
    public function show(\App\questionnaire $questionnaire)
    {
        // Loads questions.answers.responses
        $questionnaires->load('questions.answers.responses');
        // Return View questionnaire.view
        return view('questionnaire.view', compact('questionnaire'));
    }
}
