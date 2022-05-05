@extends('layouts.main')

@section('content')
<div class="get_started">
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="welcome" data-aos="fade-right">
                <div class="position-relative">
                    <h1 class="position-absolute top-50 start-50 translate-middle">> HALYK SERGEKI</h1>
                </div>
                
                <div class="welcome-image">
                    <img class="homeimg" src="{{asset('images/home.png')}}" alt=""/>
                </div>
            </div>

            <div class="col-md-6 homecard my-5" data-aos="fade-left">
                <h2 id="welcome_name" class="mt-5" >Welcome {{ Auth:: user()->name }}</h2>
                <p class="mt-3">Let's create your first <span class="colortext">post!</span></p>
                <button class="mt-5">Get Started</button>
            </div>
        </div>
            
    </div>
</div>

<div class="about_us">
    <div class="container">
      <input type="radio" name="slider" id="item-1" checked>
      <input type="radio" name="slider" id="item-2">
      <input type="radio" name="slider" id="item-3">
    <div class="cards">
      <label class="card" for="item-1" id="song-1">
        <img src="{{asset('images/slider0.jpg')}}" alt="song">
      </label>
      <label class="card" for="item-2" id="song-2">
        <img src="{{asset('images/slider1.jpg')}}" alt="song">
      </label>
      <label class="card" for="item-3" id="song-3">
        <img src="{{asset('images/slider2.jpg')}}" alt="song">
      </label>
    </div>
    <div class="player">
      <div class="upper-part">
        <div class="play-icon">
          <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
            <defs/>
            <path d="M5 3l14 9-14 9V3z"/>
          </svg>
        </div>
        <div class="info-area" id="test">
          <label class="song-info" id="song-info-1">
            <div class="title">Halyk Sergeki</div>
            
          </label>
          <label class="song-info" id="song-info-2">
            <div class="title">Words Remain</div>
            
          </label>
          <label class="song-info" id="song-info-3">
            <div class="title">Lorem input</div>
            
          </label>
        </div>
      </div>
      
    </div>
  </div>  
</div>

<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Posts</h1>
            <div class="postsearch">
                <div class="postsearch-wrapper">
            <select>
                <option selected disabled>city</option>
                <option value="Nur-sultan">Nur-sultan</option>
                <option value="Almaty">Almaty</option>
                <option value="Karaganda">Karaganda</option>
                <option value="Pavlodar">Pavlodar</option>
                <option value="Semey">Semey</option>
                <option value="Kostanay">Kostanay</option>
                <option value="Taldykorgan">Taldykorgan</option>
                <option value="Kyzylorda">Kyzylorda</option>
                <option value="Aktobe">Aktobe</option>
                <option value="Aktau">Aktau</option>
                <option value="Oral">Oral</option>
                <option value="Atyrau">Atyrau</option>
                <option value="Mangystau">Mangystau</option>
                <option value="Petropavlovsk">Petropavlovsk</option>
              </select>
              <select>
                <option value="0">city</option>
                <option value="1">Almaty</option>
                <option value="2">Nur-sultan</option>
                <option value="3">Karaganda</option>
                <option value="4">Pavlodar</option>
                <option value="5">Semey</option>
                <option value="6">Kostanay</option>
                <option value="7">Taldykorgan</option>
                <option value="8">Kyzylorda</option>
                <option value="9">Aktobe</option>
                <option value="10">Aktau</option>
                <option value="11">Oral</option>
                <option value="12">Atyrau</option>
                <option value="13">Mangystau</option>
                <option value="14">Petropavlovsk</option>
              </select>
              <input type="search" placeholder="search..." />
                </div>
            </div>
            <section class="featured-posts-section mt-5">
                <div class="row">
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{asset('images/istockphoto-638362318-612x612 2.png')}}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="{{ route('post_show') }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_2.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_3.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </a>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_4.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_5.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_6.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_7.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_8.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_9.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_10.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_11.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Post Lists</h5>
                        <div class="post-carousel">
                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselId" data-slide-to="1"></li>
                                    <li data-target="#carouselId" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <figure class="carousel-item active">
                                        <img src="{{ asset('assets/images/blog_widget_carousel.jpg') }}" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                        </figcaption>
                                    </figure>
                                    <figure class="carousel-item">
                                            <img src="{{ asset('assets/images/blog_7.jpg') }}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="#!">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                            </figcaption>
                                    </figure>
                                    <div class="carousel-item">
                                            <img src="{{ asset('assets/images/blog_5.jpg') }}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="#!">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                            </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Post List</h5>
                        <ul class="post-list">
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_1.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_2.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                <img src="{{ asset('assets/images/blog_widget_3.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_4.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

</main>

@endsection