@extends('layouts.app')

@section('content')

{{--    <div class="container mt-5">--}}
{{--        <div class="row d-flex align-items-center justify-content-center">--}}
{{--        <div class="col-md-6 text-center">--}}
{{--        <h3>Login</h3>--}}
{{--            <form action="userLogin.php" method="post" enctype="multipart/form-data">--}}
{{--                <input type="email" class="form-control input-lg" placeholder="User Email" name="email"><br>--}}
{{--                <input type="password" class="form-control input-lg" placeholder="Password" name="password"><br>--}}
{{--                <button type="submit" class="btn btn-primary" name="submit">Login</button>--}}
{{--                <p>Have't Any Account <a href="UserRegister.php">Create An Account</a></p>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <h3 class="my-3">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-5 text-end">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <p>Have't Any Account? <a href="{{ route('register') }}">Register Here</a></p>
                    </form>
        </div>
    </div>
</div>
@endsection
