@extends('layouts.app2')

@section('content')
 <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6 text-center " style="background-size: cover;background-image: url(../assets/images/photo-long-3.jpg)">
                        <div class="pl-3 auth-right">
                            <div class="auth-logo text-center mt-4">
                               <img src="https://img.icons8.com/color/96/000000/shekel--v2.png" alt="">
                            </div>
                            <div class="flex-grow-1"></div>
                            <div class="w-100 mb-4">
                                <a class="btn btn-outline-primary btn-outline-email btn-block btn-icon-text btn-rounded" href="signin.html">
                                    <i class="i-Mail-with-At-Sign"></i> Sign in with Email
                                </a>
                                <a class="btn btn-outline-primary btn-outline-google btn-block btn-icon-text btn-rounded">
                                    <i class="i-Google-Plus"></i> Sign in with Google
                                </a>
                                <a class="btn btn-outline-primary btn-outline-facebook btn-block btn-icon-text btn-rounded">
                                    <i class="i-Facebook-2"></i> Sign in with Facebook
                                </a>
                            </div>
                            <div class="flex-grow-1"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4">

                            <h1 class="mb-3 text-18">Sign Up</h1>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="name">Your name</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control form-control-rounded @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="roll_no">Roll No.</label>
                                    <input id="roll_no" type="number" name="roll_no" value="{{ old('roll_no') }}" required autocomplete="roll_no" autofocus class="form-control @error('roll_no') is-invalid @enderror form-control-rounded" minlength="3" maxlength="4">
                                    @error('roll_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" type="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"  name="password" required autocomplete="new-password" class="form-control form-control-rounded @error('password') is-invalid @enderror" minlength="8">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="repassword">Retype password</label>
                                    <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" class="form-control form-control-rounded @error('password') is-invalid @enderror" minlength="8">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <button class="btn btn-primary btn-block btn-rounded mt-3">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection