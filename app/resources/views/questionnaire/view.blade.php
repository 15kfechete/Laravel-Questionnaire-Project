@extends('layouts.app')

@section('content')

<div class="card">
                    <div class="card-divider">
                        {{ $questionnaire->questionnaireTitle}}
                    </div>
                    <div class="card-section">

                    {{ $questionnaire->agreementTerms}}
                    {{ $questionnaire->onDate}}


                   
                    </div>
                </div>

@endsection
