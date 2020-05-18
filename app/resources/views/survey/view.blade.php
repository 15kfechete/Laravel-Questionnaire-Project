@extends('layouts.app')

@section('content')

<? 
        // This section works under a form tag which will post the 
        // results of the questionnaire once each field is completed.
?>
<form action="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->questionnaireTitle)}}" method="post">

    @csrf


    <? 
        // This section will output every question created for the
        // Survey inlcuding a set of four answers for each question.
    ?>

    <? // For Loop for Each Question ?>
    @foreach($questionnaire->questions as $key => $question)
        <div class="card">
        <? // Calls the Question in the Loop ?>
            <div class="card-divider"><p class="lead">{{ $key + 1}}. {{ $question->question}}</p></div>
                <div class="card-section">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-4 cell">
                        <? // Calls the Answers in the Loop with another loop ?>
                        @foreach($question->answers as $answer)

                        <? // Code for Radio options for each question ?>
                        <p class="lead"><label for="answer{{ $answer->id }}">
                                <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                                {{ $answer->answer}}

                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                        </label></p>
                        @endforeach

                        <? // Error Alert if Answer not Selected ?>
                        @error('responses.' . $key . '.answer_id')
                        <p>Question {{ $key + 1}} not asnwered. Please select an answer.</p>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

    <? 
        // This section exists so that each user must provide an integer ID
        // as to confirm and output the results of the survey to the database.
    ?>
        <div class="card">
            <div class="card-divider">
                <p class="lead">Confirmation</p>
            </div>
                <div class="card-section">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-4 cell">
                        <? // Code for inserting an unique ID manually to confirm survey ?>
                            <label for="identification"><p class="lead">Please insert an integer Code to confirm this survey</p>
                                <input type="integer" name="survey[identification]" id="identification">
                            </label>

                            <? // Error Alert if Identification not Selected ?>
                            @error('identification')
                                <p>{{ $message }} </p>
                            @enderror
                        </div>

                        <? // Submit Responses ?>
                        <div class="medium-6 cell">
                            <button class="button" type="submit">Submit Responses</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
</form>

@endsection
