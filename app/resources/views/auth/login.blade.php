@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="card">
        <div class="card-divider">Login</div>

        <div class="card-section">
            <div class="medium-6 cell">
                <label for="email">E-Mail Address
                    <!-- Input for Email -->
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>
                    <!-- Error message for not filling email field -->
                    @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span> @enderror
                </label>

            </div>
            <div class="medium-6 cell">
                <label for="password">Password
                    <!-- Input for Password -->
                    <input id="password" type="password" name="password" required autocomplete="current-password">

                    <!-- Error message for not filling Password field -->
                    @error('password')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span> @enderror
                </label>
            </div>

            <div class="medium-6 cell">
                <label for="remember">Remember Me
                    <!-- Remember me checkbox -->
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old( 'remember') ? 'checked' : '' }}>
                </label>
            </div>

            <div class="medium-6 cell">
                <!-- Login Button -->
                <button type="submit" class="button">
                    Login
                </button>
                <!-- If statement for password -->
                @if (Route::has('password.request'))
                <!-- Forgot you password button -->
                <a class="button" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
                @endif
            </div>
</form>

</div>
</div>
@endsection