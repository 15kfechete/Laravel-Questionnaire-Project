@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-divider">
        <p class="lead">Dashboard</p>
        </div>
            <div class="card-section">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <a href="/questionnaires/create" class="button">Create New Questionnaire</a>
            </div>
    </div>
            @foreach($questionnaires as $questionnaire)
    <div class="card">
        <div class="card-divider">
            {{ $questionnaire->questionnaireTitle }}
        </div>
            <div class="card-section">

            <div class="grid-x">
                <div class="cell small-12">
                    <p>{{ $questionnaire->agreementTerms }}</P>
                </div>
            </div>

            <div class="grid-x">
                <div class="cell small-2">
                    <h3>Private</h3>
                </div>
                <div class="cell small-8">
                    <h3>Public</h3>
                </div>
                <div class="cell small-2">
                    <form action="/questionnaires/{{ $questionnaire->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="alert button">Delete Questionnaire</button>
                    </form>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell small-2">  
                    <a href="{{ $questionnaire->path() }}" class="button">Access Questionnaire</a>
                </div>
                <div class="cell small-8">
                    <a href="{{ $questionnaire->publicPath() }}" class="button">Link: {{ $questionnaire->publicPath() }}</a>
                </div>
                <div class="cell small-2">
                    <a href="/questionnaires/{{ $questionnaire->id}}/edit" class="success button">Edit Questionnaire</a>
                </div>
            </div>
        </div>
    </div>
            @endforeach
@endsection