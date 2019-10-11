@extends('layouts.app2')

@section('content')
<div class="auth-content">
    <div class="card o-hidden">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4">
                    <div class="auth-logo text-center mb-4">
                        <img src="https://img.icons8.com/color/96/000000/shekel--v2.png" alt="">
                    </div>
                    <h1 class="mb-3 text-18">Sign In</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input id="email"
                                class="form-control form-control-rounded  @error('email') is-invalid @enderror"
                                type="email" name='email'  value="{{ old('email') }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password"
                                class="form-control form-control-rounded  @error('password') is-invalid @enderror"
                                type="password" name='password' required minlength="8">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type='sumbit' class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>

                    </form>

                    
                    @if (Route::has('password.request'))
                                <div class="mt-3 text-center">
<a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                </div>
                                @endif
                </div>
            </div>
            <div class="col-md-6 text-center "
                style="background-size: cover;background-image: url(http://gull-html-laravel.ui-lib.com/assets/images/photo-long-3.jpg">
                <div class="pr-3 auth-right">
                    <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text"
                        href="/register">
                        <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                    </a>
                    <a class="btn btn-rounded btn-outline-primary btn-outline-google btn-block btn-icon-text">
                        <i class="i-Google-Plus"></i> Sign up with Google
                    </a>
                    <a class="btn btn-rounded btn-outline-primary btn-block btn-icon-text btn-outline-facebook">
                        <i class="i-Facebook-2"></i> Sign up with Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection