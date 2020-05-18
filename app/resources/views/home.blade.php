@extends('layouts.app')

@section('content')
    <? 
        // The code section under the first 'card' div tag provides
        // the user with a link to create a new questionnaire which
        // will return the questionnaire.create view.
    ?>
    <div class="card">
        <div class="card-divider">
        <p class="lead">Dashboard</p>
        </div>
            <div class="card-section">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <a href="/questionnaires/create" class="button">Create New Questionnaire</a>
            </div>
    </div>

    <? 
        // The code section under the second 'card' div tag provides
        // the user with a list of currenlty available Questionnaires
        // that where previoulsy created by them. Each Questionnaire
        // section provides the description of the terms and agreements,
        // the Title of the Questonnaire, inlcuing links to: private access
        // to the questionnaire to add additional questions, a link to
        // the actual survey to be publicly completed, a link that deletes
        // the survey and finally a link that edits the survey.
    ?>
            @foreach($questionnaires as $questionnaire) <? // For Loop for Questionnaires ?>
    <div class="card">
        <div class="card-divider">
            {{ $questionnaire->questionnaireTitle }} <? // Calls Questionnaire Title ?>
        </div>
            <div class="card-section">

            <div class="grid-x">
                <div class="cell small-12">
                    <p>{{ $questionnaire->agreementTerms }}</P> <? // Calls Agreement Terms?>
                </div>
            </div>

            <div class="grid-x">
                <div class="cell small-2">
                    <h3>Private</h3>
                </div>
                <div class="cell small-8">
                    <h3>Public</h3>
                </div>
                <div class="cell small-2">
                    <form action="/questionnaires/{{ $questionnaire->id }}" method="post"> <? // Form that calls for the DELETE function?>
                        @method('DELETE') <? // Replaces 'post' with DELETE method?>
                        @csrf <? // Cross Site Request ?>
                        <button type="submit" class="alert button">Delete Questionnaire</button> <? // Delete button removes Questionnaire?>
                    </form>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell small-2">  
                    <a href="{{ $questionnaire->path() }}" class="button">Access Questionnaire</a> <? // Link to Access the Specific Questionnaire?>
                </div>
                <div class="cell small-8">
                <? // Link to Access the Specific Survey?>
                    <a href="{{ $questionnaire->publicPath() }}" class="button">Link: {{ $questionnaire->publicPath() }}</a>
                </div>
                <div class="cell small-2">
                <? // Link to Edit the Specific Questionnaire?>
                    <a href="/questionnaires/{{ $questionnaire->id}}/edit" class="success button">Edit Questionnaire</a>
                </div>
            </div>
        </div>
    </div>
            @endforeach
@endsection