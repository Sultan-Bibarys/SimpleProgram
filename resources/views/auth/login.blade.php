@extends('layouts.app')

@section('content')
<div class="sign_in">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section id="welcome">
                <img src="{{asset('images/amico.png')}}" alt="" width="390px" height="374px" />
            </section>
            <img
            class="img2"
            src="{{asset('images/undraw_real_time_sync_re_nky7 1.png')}}"
            alt=""
            width="357px"
            height="207px"
            />
            <div class="rightside">
                <div class="first">
                  <p>don't have an account?</p>
                  <button onclick="document.location='{{route('register')}}'" class="btn1">
                    SIGN UP
                  </button>
                </div>
                <div class="rightside-wrapper">
                    <div class="signin">
                      <form method="POST" action="{{route('login')}}">
                        @csrf
                        <h2 class="my-4">SIGN IN TO HALYK SERGEGI</h2>
                      <h4 >Enter your details below</h4>
                      <div class="form-fields">
                        <div class="form-field">
                          <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                          placeholder="email">
            
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="form-field">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                          placeholder="password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        @if (Route::has('password.request'))
                            <a class="password" href="{{ route('password.request') }}">
                                forgot your password?
                            </a>
                        @endif
                        
                      </div>
                      <div class="form-button">
                        <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button>
            
                      
                      </div>
        </div>
    </div>
</div>
</div>
@endsection
