@extends('layouts.app')

@section('content')

<div class="card">
                    <div class="card-divider">
                        Create New Questionnaire
                    </div>
                    <div class="card-section">

                    <form action="/questionnaires" method="post">
                    
                    @csrf

                    <div class="medium-6 cell">
                        <label for="questionnaireTitle">Questionnaire Title
                            <input name="questionnaireTitle" type="text" id="questionnaireTitle" placeholder="Input a title for the  questionnaire">
                        </label>
                    </div>

                    <div class="medium-6 cell">
                        <label for="agreementTerms">Questionnaire Description and Terms
                            <input name="agreementTerms" type="text" id="agreementTerms" placeholder="Input content for the questionnaire description">
                        </label>
                    </div>

                    <div class="medium-6 cell">
                        <button type="submit" class="button">Create Questionnaire</button>
                    </div>
                    
                    </form>
                    </div>
                </div>

@endsection
