@extends('layouts.app')

@section('content')
    <? 
        // The code section under the 'card' div tag shows
        // a list of available surveys released to the public.
        // Each survey listed providess a Decription including the Terms
        // and Description, The Title and a link to the survey
    ?>
    
            @foreach($questionnaires as $questionnaire)
    <div class="card">
        <div class="card-divider">
            {{ $questionnaire->questionnaireTitle }}
        </div>
            <div class="card-section">

            <div class="grid-x">
                <div class="cell small-12">
                    <h4>Description, Terms and Agreements</h4>
                </div>
            </div>

            <div class="grid-x">
                <div class="cell small-12">
                    <p>{{ $questionnaire->agreementTerms }}</P>
                </div>
            </div>

            <div class="grid-x">
                <div class="cell small-8">
                    <h3>Click here please to participate in the survey</h3>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell small-8">
                    <a href="{{ $questionnaire->publicPath() }}" class="button">Link: {{ $questionnaire->publicPath() }}</a>
                </div>
            </div>
        </div>
    </div>
            @endforeach
@endsection