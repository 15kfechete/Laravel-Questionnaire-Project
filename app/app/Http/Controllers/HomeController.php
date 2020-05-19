<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // Home constructor for auth middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Index Function
    public function index()
    {
        // Calls questionnaires through auth>users>questionnaire
        $questionnaires = auth()->user()->questionnaire;
        // Returns homepage with compacted questionnaires
        return view('home', compact('questionnaires'));
    }
}
