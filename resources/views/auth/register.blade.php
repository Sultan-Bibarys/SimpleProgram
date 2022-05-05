@extends('layouts.app')

@section('content')
<div class="sign_up">
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
                    <p>already have an account?</p>
                    <button onclick="document.location='{{route('login')}}'" class="btn1">
                        SIGN IN
                    </button>
                </div>
                <div class="rightside-wrapper">
                    <div class="signin my-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2>SIGN UP TO HALYK SERGEGI</h2>
                            <h4>Enter your details below</h4>
                            <div class="form-fields">
                                <div class="form-field">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="name">
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                                <div class="form-field">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                                <div class="form-field">
                                    <input id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                    placeholder="password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-field">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                    placeholder="confirm password">
                                </div>
                            </div>
    
                            <div class="form-button">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                                    
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
