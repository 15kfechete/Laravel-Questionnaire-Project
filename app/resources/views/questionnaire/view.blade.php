@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-divider">
        {{ $questionnaire->questionnaireTitle}}
    </div>
        <div class="card-section">
            <div class="small button-group">
                <a href="/questionnaires/{{ $questionnaire->id}}/questions/create" class="button">Create New Question</a>
                <a href="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->questionnaireTitle)}}" class="button">Complete a Survey</a>
            </div class="small button-group">

            </div>


            @foreach($questionnaire->questions as $question)
                <div class="card-divider">
                    {{ $question->question }}
                </div>

                <div class="card-section">
                    
                        @foreach($question->answers as $answer)
                        <ul class="vertical menu">
                        <li>{{ $answer->answer }}</li>
                        </ul>

                        @endforeach
                </div>
            @endforeach                    
</div>
@endsection
