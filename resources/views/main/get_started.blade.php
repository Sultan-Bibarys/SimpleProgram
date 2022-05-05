@extends('layouts.main')

@section('get_started')
    <div class="get_started">
    <div class="row row-cols-2">
            <div class="col" data-aos="fade-left">
                <div class="welcome-image">
                    <img class="homeimg" src="{{asset('images/home.png')}}" alt="" width="474px"height="428px"/>
                </div>
            </div>
            <div class="col" data-aos="fade=right">
                <h2 id="welcome_name">Welcome</h2>
                <p>Let's create your first <span class="colortext">post!</span></p>
                <button>Get Started</button>
            </div>
        </div>
    </div>

@endsection