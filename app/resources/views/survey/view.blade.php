@extends('layouts.app')

@section('content')


<form action="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->questionnaireTitle)}}" method="post">

    @csrf

    @foreach($questionnaire->questions as $key => $question)
        <div class="card">
            <div class="card-divider"><p class="lead">{{ $key + 1}}. {{ $question->question}}</p></div>
                <div class="card-section">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-4 cell">
                        @foreach($question->answers as $answer)
                        <p class="lead"><label for="answer{{ $answer->id }}">
                                <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                                {{ $answer->answer}}

                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                        </label></p>
                        @endforeach

                        @error('responses.' . $key . '.answer_id')
                        <p>Question {{ $key + 1}} not asnwered. Please select an answer.</p>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

        <div class="card">
            <div class="card-divider">
                <p class="lead">Confirmation</p>
            </div>
                <div class="card-section">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-4 cell">
                            <label for="identification"><p class="lead">Please insert an integer number to confirm this survey</p>
                                <input type="integer" name="survey[identification]" id="identification">
                            </label>
                            @error('identification')
                                <p>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="medium-6 cell">
                            <button class="button" type="submit">Create Questionnaire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
</form>

@endsection
