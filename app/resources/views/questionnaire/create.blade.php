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
                        <? // Input for Questionnaire Title ?>
                            <input name="questionnaireTitle" type="text" id="questionnaireTitle" placeholder="What will you call your Questionnaire?">
                        </label>
                        
                        <? // Error for Questionnaire Title if not filled ?>
                        @error('questionnaireTitle')
                            <p>{{ $message}} </p>
                        @enderror
                    </div>

                    <div class="medium-6 cell">
                        <label for="agreementTerms">Questionnaire Description and Terms
                        <? // Input for Questionnaire Description and Terms ?>
                        <textarea name="agreementTerms" cols="30" rows="10" type="text" id="agreementTerms" placeholder="Input content for the questionnaire description"> </textarea>
                        </label>

                        <? // Error for Questionnaire Description and Terms if not filled ?>
                        @error('agreementTerms')
                            <p>{{ $message}} </p>
                        @enderror
                    </div>

                    <div class="medium-6 cell">
                    <? // Button for Creating Questionnaie ?>
                        <button type="submit" class="button">Create Questionnaire</button>
                    </div>
                    
                    </form>
                    </div>
                </div>

@endsection
