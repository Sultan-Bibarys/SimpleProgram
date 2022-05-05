<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Halyk Sergeki</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
  </head>
  <body>
      <header>
          <div class="logo">
              <img src="{{asset('images/logo.png')}}" alt="" width="85px" height="76px">
          </div>
      </header>
    <section id="welcome">
      <img src="{{ asset('images/business-3d.png')}}" alt="" width="524px" height="464px" />
    </section>
    <img class="img2" src="{{asset('images/undraw_real_time_sync_re_nky7 1.png')}}" alt="" width="357px" height="207px">
    <div class="rightside">
        <h1><b>HALYK SERGEGI<b></h1>
            <div class="rightside-wrapper">
        <h2>CHANGE THE WORLD FOR THE BETTER</h2>
        <p>
          Nazarbayev: the unity of the people is our golden wealth
        </p>
        <div class="button mt-5">
          @if (Route::has('login'))
            <a href="{{ route('login') }}">{{ __('SIGN IN') }}</a>
          @endif                            
          @if (Route::has('register'))                          
            <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
          @endif
        </div>
        
      </div>
    </div>
  </body>
</html>
