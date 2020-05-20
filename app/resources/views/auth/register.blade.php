@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="card">
        <div class="card-divider">Register</div>

        <div class="card-section">
            <div class="medium-6 cell">
                <label for="name">Name
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name"
                        autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>

                <label for="email">E-Mail Address
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>

            </div>
            <div class="medium-6 cell">
                <label for="password">Password
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>

            <div class="medium-6 cell">
                <label for="password">Confirm Password
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </label>
            </div>

            <div class="medium-6 cell">
                <button type="submit" class="button">
                    Register
                </button>
            </div>
</form>

</div>
</div>

@endsection