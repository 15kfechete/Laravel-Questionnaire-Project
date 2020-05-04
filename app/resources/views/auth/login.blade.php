@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="card">
        <div class="card-divider">Login</div>

        <div class="card-section">
            <div class="medium-6 cell">
                <label for="email">E-Mail Address
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                </label>

            </div>
            <div class="medium-6 cell">
                <label for="password">Password
                    <input id="password" type="password" name="password" required autocomplete="current-password"> @error('password')
                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                </label>
            </div>

            <div class="medium-6 cell">
                <label for="remember">Remember Me
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                </label>
            </div>

            <div class="medium-6 cell">
                <button type="submit" class="button">
                    Login
                </button>

                @if (Route::has('password.request'))
                <a class="button" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> @endif
            </div>
</form>

</div>
</div>
@endsection