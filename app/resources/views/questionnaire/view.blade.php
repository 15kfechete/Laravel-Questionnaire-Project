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
            <div class="card">

                <div class="card-divider">
                    {{ $question->question }}
                </div>

                <div class="card-section">
                    <ul class="vertical menu">
                            @foreach($question->answers as $answer)
                                <li>
                                        <div class="medium-6 cell">{{ $answer->answer }}</div>
                                    @if($question->responses->count())
                                        <div class="medium-6 cell">{{ intval(($answer->responses->count() * 100) / $question->responses->count()) }}</div>
                                    @endif
                                </li>
                            @endforeach
                    </ul>
                </div>
                    <div class="medium-6 cell">
                            <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="button">Delete Question</button>
                            </form>
                    </div>
            </div>
            @endforeach           

         
</div>
@endsection
