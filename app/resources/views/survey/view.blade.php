@extends('layouts.app')

@section('content')


                <form action="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->questionnaireTitle)}}" method="post">

                    @csrf

                    @foreach($questionnaire->questions as $key => $question)
                    <div class="card">
                        <div class="card-divider">{{ $key + 1}} {{ $question->question}}</div>
                            <div class="card-section">

                                @error('responses.' . $key . '.answer_id')
                                    <p>{{ $message }} </p>
                                @enderror
                                
                                <ul class="vertical menu">
                                    @foreach($question->answers as $answer)
                                    <label for="answer{{ $answer->id }}">
                                        <li>
                                            <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                                            {{ $answer->answer}}

                                            <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                        </li>
                                    </label>
                                    @endforeach
                                </ul> 
                         </div>
                    </div>
                    @endforeach
                    <div class="card">
                        <div class="card-divider">
                            Confirmation
                        </div>
                            <div class="card-section">
                                <ul class="vertical menu">
                                    <label for="identification">
                                        <li>
                                            <input type="integer" name="survey[identification]" id="identification">
                                        </li>
                                    </label>

                                    @error('identification')
                                        <p>{{ $message }} </p>
                                    @enderror
                                <div class="medium-6 cell">
                                    <button class="button" type="submit">Create Questionnaire</button>
                                </div>
                            </div>
                    </div>

                </form>

@endsection
