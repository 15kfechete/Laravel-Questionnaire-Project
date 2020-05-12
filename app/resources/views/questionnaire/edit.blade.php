@extends('layouts.app')

@section('content')

<div class="card">
                    <div class="card-divider">
                        Create New Questionnaire
                    </div>
                    <div class="card-section">

                    <form action="/questionnaires/{{ $questionnaire->id}}" method="PATCH">
                    
                    @csrf

                    <div class="medium-6 cell">
                        <label for="questionnaireTitle">Questionnaire Title
                            <input name="questionnaireTitle" type="text" id="questionnaireTitle" placeholder="Input a title for the  questionnaire">
                        </label>

                        @error('questionnaireTitle')
                            <p>{{ $message}} </p>
                        @enderror
                    </div>

                    <div class="medium-6 cell">
                        <label for="agreementTerms">Questionnaire Description and Terms
                            <input name="agreementTerms" type="text" id="agreementTerms" placeholder="Input content for the questionnaire description">
                        </label>

                        @error('agreementTerms')
                            <p>{{ $message}} </p>
                        @enderror
                    </div>

                    <div class="medium-6 cell">
                        <button type="submit" class="button">Update Questionnaire</button>
                    </div>
                    
                    </form>
                    </div>
                </div>

@endsection
