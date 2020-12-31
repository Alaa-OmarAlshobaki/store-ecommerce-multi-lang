{{-- @extends('layouts.app') --}}
@extends('home.include.layout')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
 --}}

<!--  BEGIN CONTENT PART  -->
<main class="main"> 
    <div class="container"> 
        <div class="row sec-padding">
             <div class="col-md-12 col-sm-12">
                 <div class="login-wrap">
                    <div class="bm-30">
                        <span class="icon lh"><i class="icofont icofont-ui-unlock"></i></span>
                        <h3>Verify Code</h3>
                        <p>Enter your username and password to login.</p>
                    </div>

                    <form method="POST" action="{{ route('verify') }}">
                        @csrf
                        <div class="form-group">
                            <label>code<span>*</span></label>
                            <input id="verify_code" type="text" class="form-control @error('verify_code') is-invalid @enderror"  name="verify_code" value="{{ old('verify_code') }}" required  autofocus>
                            @error('verify_code')
                            <span class="invalid-feedback " role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>{{ __('Password') }} <span>*</span></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group flx-element">
                            <div class="check-wrap">
                                <input type="checkbox">
                                <label> {{ __('Remember Me') }}</label>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" value=" {{ __('Login') }}">
                        </div>

                        Don’t have an account yet? <a href="{{ route('register') }}"><strong>Signup Now!</strong></a> 
                    </form>
                 </div>
             </div>
        </div>              
    </div>  
</main>
<!--main-->
@endsection
