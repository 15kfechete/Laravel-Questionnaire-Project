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

                    You are logged in!

                    <a href="/questionnaires/create" class="button">Create New Questionnaire</a>
                    </div>
</div>

@endsection
