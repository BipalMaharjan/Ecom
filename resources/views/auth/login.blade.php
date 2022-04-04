{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.front')
@section('head')
<link rel="stylesheet" href={{ asset("css/user-auth.css") }}>
@endsection

@section('content')

<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                <div class="user-form-logo"><a href="/"><img src="images/logo.png" alt="logo"></a></div>
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>welcome!</h2>
                        <p>Use your credentials to access</p>
                    </div>
                    <div class="user-form-group">
                        <ul class="user-form-social">
                            <li><a href="{{ route('social.oauth', 'facebook') }}" class="facebook"><i class="fab fa-facebook-f"></i>login with
                                    facebook</a></li>
                            <li><a href="{{ route('social.oauth', 'twitter') }}" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a>
                            </li>
                            <li><a href="{{ route('social.oauth', 'google') }}" class="google"><i class="fab fa-google"></i>login with google</a></li>
                            <li><a href="{{ route('social.oauth', 'github') }}" class="instagram"><i class="fab fa-instagram"></i>login with
                                    instagram</a></li>
                        </ul>
                        <div class="user-form-divider">
                            <p>or</p>
                        </div>
                        <form  class="user-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group"><input id="email" type="email" class="form-control"
                                    placeholder="Enter your email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group"><input id="password" type="password" class="form-control"
                                    placeholder="Enter your password  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}


                            <div class="form-check mb-3"><input class="form-check-input" type="checkbox" value=""
                                    id="check"><label class="form-check-label" for="check">Remember Me</label></div>
                            <div class="form-button"><button type="submit">login</button>
                                <p>Forgot your password?<a href="reset-password">reset here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="user-form-remind">
                    <p>Don't have any account?<a href="register">register here</a></p>
                </div>
                <div class="user-form-footer">
                    <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

