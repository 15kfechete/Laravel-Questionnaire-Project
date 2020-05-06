@extends('layouts.app')

@section('content')

<div class="card">

                    <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }} method="post">

                    @csrf

                    @foreach($questionnaire->questions as $key => $question)
                        <div class="card-divider">
                        {{ $key + 1}} {{ $question->question}}
                        </div>
                            <div class="card-section">
                            
                            <ul class="vertical menu">
                            
                                @foreach($question->answers as $answer)
                                <label for="answer{{ $answer->id }}">
                                    <li>
                                        <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id}}" value="{{ $answer->id }}">
                                        {{ $answer->answer}}
                                    </li>
                                @endforeach
                                </label>
                            </ul>
                              
                            </div>
                    @endforeach

                    <a href="/questionnaires/create" class="button">Finnish Survey</a>

                    
                    </form>

                </div>
@endsection
