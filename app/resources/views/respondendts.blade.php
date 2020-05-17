@extends('layouts.app')

@section('content')

    
            @foreach($questionnaires as $questionnaire)
    <div class="card">
        <div class="card-divider">
            {{ $questionnaire->questionnaireTitle }}
        </div>
            <div class="card-section">

            <div class="grid-x">
                <div class="cell small-12">
                    <p>{{ $questionnaire->agreementTerms }}</P>
                </div>
            </div>

            <div class="grid-x">
                <div class="cell small-8">
                    <h3>Click the following link to access the Survey</h3>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell small-8">
                    <a href="{{ $questionnaire->publicPath() }}" class="button">Link: {{ $questionnaire->publicPath() }}</a>
                </div>
            </div>
        </div>
    </div>
            @endforeach
@endsection