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

                <div class="grid-x">
                    <div class="cell small-2">
                    <a href="/respondents" class="button">View Public Questionnaires</a>
                    </div>

                    <div class="cell small-2">
                    <a href="/home" class="button">Access Questionnaires</a>
                    </div>
                </div>

            </div>
    </div>
        
@endsection