@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-divider">
        EditQuestionnaire
    </div>
    <div class="card-section">

        <? // Form for Editing Questionnaire through Patch Method ?>
        <form action="/questionnaires/{{ $questionnaire->id }}" method="post">
            @method('PATCH')
            <? // PATCH mthod that replaces post method ?>
            @csrf
            <? // Cross site Request ?>


            <div class="medium-6 cell">
                <label for="questionnaireTitle">Questionnaire Title
                    <? // Input for Questionnaire Title ?>
                    <input name="questionnaireTitle" type="text" id="questionnaireTitle"
                        placeholder="What will you call your Questionnaire?">
                </label>
                <? // Error for Questionnaire Title if not filled ?>
                @error('questionnaireTitle')
                <p>{{ $message}} </p>
                @enderror
            </div>

            <div class="medium-6 cell">
                <label for="agreementTerms">Questionnaire Description and Terms
                    <? // Input for Questionnaire Description and Terms ?>
                    <textarea name="agreementTerms" cols="30" rows="10" type="text" id="agreementTerms"
                        placeholder="Input content for the questionnaire description"> </textarea>
                </label>

                <? // Error for Questionnaire Description and Terms if not filled ?>
                @error('agreementTerms')
                <p>{{ $message}} </p>
                @enderror
            </div>

            <div class="medium-6 cell">
                <? // Button for Editing Questionnaie ?>
                <button type="submit" class="button">Edit Questionnaire</button>
            </div>

        </form>
    </div>
</div>

@endsection