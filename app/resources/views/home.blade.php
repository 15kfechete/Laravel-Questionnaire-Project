@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-divider">
            Dashboard
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

    <div class="card">
        <div class="card-divider">
            My Questionnaires
        </div>
            <div class="card-section">
                <ul class="vertical menu">
                    @foreach($questionnaires as $questionnaire)
                        <li>
                            <a href="{{ $questionnaire->path() }}">{{ $questionnaire->questionnaireTitle }}</a>
                        </li>

                        <div>
                            Public
                            <p>
                                <a href="{{ $questionnaire->path() }}" class="button">{{ $questionnaire->path() }}}</a>
                            </p>
                        </div>
                    @endforeach
                </ul>
            </div>
    </div>
@endsection