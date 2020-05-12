@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-divider">
    <p class="lead">{{ $questionnaire->questionnaireTitle }}</p>
    </div>
        <div class="card-section">
            <div class="grid-x grid-padding-x">
                <div class="medium-2 cell">
                    <a href="/questionnaires/{{ $questionnaire->id}}/questions/create" class="button">Create New Question</a>
                </div>
                <div class="medium-8 cell">
                    <a href="/questionnaires/{{ $questionnaire->id}}/edit" class="button">Edit Questionnaire</a>
                </div>
                <div class="medium-2 cell">
                    <a href="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->questionnaireTitle)}}" class="button">Complete a Survey</a>
                </div>
            </div>
        </div>    
</div>

@foreach($questionnaire->questions as $question)
            <div class="card">

                <div class="card-divider">
                    <p class="lead">{{ $question->question }}</p>
                </div>

                <div class="card-section">
                    <div class="grid-x grid-padding-y">
                        @foreach($question->answers as $answer)
                        <div class="medium-11 cell"><p class="lead">{{ $answer->answer }}</p></div>
                                @if($question->responses->count())
                        <div class="medium-1 cell"><p class="lead">% {{ intval(($answer->responses->count() * 100) / $question->responses->count()) }}</p></div>
                                @endif
                        @endforeach
                    </div>
                    
                    <div class="grid-x grid-padding-y">
                        <div class="medium-6 cell">
                            <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="alert button">Delete Question</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach       
@endsection
