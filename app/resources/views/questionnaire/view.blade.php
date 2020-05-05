@extends('layouts.app')

@section('content')

<div class="card">
                    <div class="card-divider">
                        {{ $questionnaire->questionnaireTitle}}
                    </div>
                    <div class="card-section">

                    {{ $questionnaire->agreementTerms}}

                    <a href="/questionnaires/{{ $questionnaire->id}}/questions/create" class="button">Create New Question</a>

                   
                    </div>
                </div>

@endsection
