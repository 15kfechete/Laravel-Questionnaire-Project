@extends('layouts.app')

@section('content')

<? 
        // This section in the first card div tag provides
        // with two buttons with one for creating a new question
        // and the other for viewing a survey
    ?>

<div class="card">
    <div class="card-divider">
        <? // Calls for Questionnaire Title ?>
        <p class="lead">{{ $questionnaire->questionnaireTitle }}</p>
    </div>
    <div class="card-section">
        <div class="grid-x grid-padding-x">
            <div class="medium-10 cell">
                <? // Button for creating a new Quetion?>
                <a href="/questionnaires/{{ $questionnaire->id}}/questions/create" class="button">Create New
                    Question</a>
            </div>
            <div class="medium-2 cell">
                <? // Button for Viewing Survey?>
                <a href="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->questionnaireTitle)}}"
                    class="button">View Survey</a>
            </div>
        </div>
    </div>
</div>


<? 
        // This section in the second card div tag provides
        // a loop which outputs each question that has been
        // created for the questionnaire, while also including
        // their results from colected responses.

        // This Section also has a delete and edit button for each
        // questionnaire.
?>

<? // For Loop for each question?>
@foreach($questionnaire->questions as $question)
<div class="card">

    <div class="card-divider">
        <? // Calls Question?>
        <p class="lead">{{ $question->question }}</p>
    </div>

    <div class="card-section">
        <div class="grid-x grid-padding-y">
            <? // For Loop for each Answer?>
            @foreach($question->answers as $answer)
            <? // Calls Answers?>
            <div class="medium-9 cell">
                <p class="lead">{{ $answer->answer }}</p>
            </div>
            @if($question->responses->count())
            <? // Counts the number of responders?>
            <div class="medium-2 cell">
                <p class="lead"> <strong>{{ intval(($answer->responses->count())) }}</strong> Answered</p>
            </div>
            <? // Counts the percentage of responders?>
            <div class="medium-1 cell">
                <p class="lead">% {{ intval(($answer->responses->count() * 100) / $question->responses->count()) }}</p>
            </div>
            @endif
            @endforeach
        </div>

        <div class="grid-x grid-padding-y">
            <div class="small-10 cell">
                <? // Form that deletes question if called?>
                <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                    @method('DELETE')
                    @csrf

                    <? // Button for deleting specific question?>
                    <button type="submit" class="alert button">Delete Question</button>
                </form>
            </div>

            <div class="small-2 cell">
                <? // Button for Editing Specific Question and Options?>
                <a href="/questionnaires/{{ $questionnaire->id}}/questions/{{ $question->id }}/edit"
                    class="success button">Edit Question</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection