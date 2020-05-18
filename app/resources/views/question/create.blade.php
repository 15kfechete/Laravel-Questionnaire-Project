@extends('layouts.app')

@section('content')

<div class="card">
                    <div class="card-divider">
                        Create New Question
                    </div>
                    <div class="card-section">
                    <? // Form for Creating Question through post Method ?>
                    <form action="/questionnaires/{{ $questionnaire->id}}/questions" method="post">
                    
                    @csrf <? // Cross site Request ?>

                    <div class="medium-6 cell">
                        <label for="question">Question Input
                        <? // Input for Question ?>
                            <input name="question[question]" type="text" id="question" placeholder="Input your question">
                        </label>

                        <? // Error for Question if not filled ?>
                        @error('question.question')
                            <p>{{ $message}} </p>
                        @enderror
                    </div>

                        <fieldset>
                            <legend>Choices</legend>

                            <div>
                                <label for="answer1">Choice 1
                                <? // Input for Answer ?>
                                    <input name="answers[][answer]" type="text" id="answer1" placeholder="Input an option">
                                </label>
                                <? // Error for Answer if not filled ?>
                                @error('answers.0.answer')
                                    <p>{{ $message}} </p>
                                @enderror
                            </div>

                            <div>
                                <label for="answer2">Choice 2
                                <? // Input for Answer ?>
                                    <input name="answers[][answer]" type="text" id="answer2" placeholder="Input an option">
                                </label>
                                <? // Error for Answer if not filled ?>
                                @error('answers.1.answer')
                                    <p>{{ $message}} </p>
                                @enderror
                            </div>

                            <div>
                                <label for="answer3">Choice 3
                                <? // Input for Answer ?>
                                    <input name="answers[][answer]" type="text" id="answer3" placeholder="Input an option">
                                </label>
                                <? // Error for Answer if not filled ?>
                                @error('answers.2.answer')
                                    <p>{{ $message}} </p>
                                @enderror
                            </div>

                            <div>
                                <label for="answer4">Choice 4
                                <? // Input for Answer ?>
                                    <input name="answers[][answer]" type="text" id="answer4" placeholder="Input an option">
                                </label>
                                <? // Error for Answer if not filled ?>
                                @error('answers.3.answer')
                                    <p>{{ $message}} </p>
                                @enderror
                            </div>
                        </fieldset>

                        <div class="medium-6 cell">
                        <? // Button for Submiting Question?>
                            <button type="submit" class="button">Submit Question</button>
                        </div>
                    
                    </form>
                    </div>
                </div>
@endsection
