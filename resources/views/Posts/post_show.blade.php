@extends('layouts.main')
@section('content')
<div class="post_show">
  <div class="container">
    <div class="row">
      <section id="welcome">
        <div class="welcome-wrapper">
          <div class="inner">
            <div class="welcome-flex">
              <div class="welcome-details" class="col-md-6" data-aos="fade-right">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
              </div>
              <img class="col-md-6" data-aos="fade-left"
                src="{{asset('images/istockphoto-638362318-612x612 2.png')}}"
                alt="Приветственная картинка"
              />
            </div>
          </div>
        </div>
      </section>
    </div>
</div>
<section class="container">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni non, quisquam aspernatur ad qui 
        libero perferendis officia rem a praesentium vel quo placeat ut, aliquam veritatis, unde tempora ullam vitae.
        Doloribus ullam dolore asperiores, et commodi expedita? Tempora autem laboriosam 
        aspernatur in voluptatum eum blanditiis illo cum, doloremque distinctio totam id 
        veniam aliquid fuga vel debitis velit exercitationem quia eos.
        Esse obcaecati odit, ratione dicta autem sed officiis expedita, reprehenderit ab
         accusantium ducimus impedit labore optio blanditiis corrupti ut odio magnam dolorum 
         sapiente officia dolore illum veniam consequatur cumque. Perferendis!
        Deleniti qui assumenda atque, quae totam quia neque enim iste et aspernatur sed ipsa, 
        inventore nulla ea. Blanditiis dolore exercitationem perferendis molestiae nemo vitae, 
        earum, odio illo modi, culpa officia?
        Deserunt, laboriosam. Vero dicta, animi cupiditate dolorem eveniet quasi sint molestiae 
        veritatis odio dolor, porro voluptatibus necessitatibus, voluptates veniam fugiat? Voluptatum 
        maiores iste ullam deserunt distinctio amet unde cumque ipsa?
    </p>
    <div class="postinfo">
        <div class="postinfo-flex">
          <div class="infor">
            <p><img src="{{asset('images/carbon_time.png')}}" alt="" />Date.Date.Date</p>
            <br />
            <p>
              <img src="{{asset('images/bx_user.png')}}" text-align="middle" />User Name
            </p>
            <br />
            <p>
              <img src="{{asset('images/ic_outline-place.png')}}" alt="" />Almaty, mkr Lala
            </p>
          </div>
          <div class="infol">
            <div class="comment comment">
              <i
                class="fa fa-comment"
                aria-hidden="true"
                style="margin-left: 6px"
              ></i>
            </div>
            <div class="comment plus">
              <i
                class="fa fa-plus"
                aria-hidden="true"
                style="margin-left: 6px"
              ></i>
            </div>
            <div class="comment dots">
              <i class="fa-solid fa-ellipsis"></i>
            </div>
          </div>
        </div>
      </div>
</section>
<section>
    <section id="chat">
        <div class="chat-flex">
          <div class="message">
            <div class="name">
              <img
                src="./images/carbon_user-avatar.png"
                alt="Avatar"
                width="30px"
              />
              <h3>Lala Lalalala</h3>
            </div>
            <div class="message-text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                ipsum nobis tempora quod ab molestiae unde soluta expedita velit
                incidunt, quas maiores minus rerum sint sit natus aut! Unde,
                corporis!
              </p>
            </div>
            <div class="span">
              <div class="date"><span class="date">11 Oct 11:00</span></div>
              <div class="link">
                <a href="#">answer</a>
                <a href="#">coplain</a>
              </div>
            </div>
          </div>
          <div class="message">
            <div class="name">
              <img
                src="images/carbon_user-avatar.png"
                alt="Avatar"
                width="30px"
              />
              <h3>Lala Lalalala</h3>
            </div>
            <div class="message-text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                ipsum nobis tempora quod ab molestiae unde soluta expedita velit
                incidunt, quas maiores minus rerum sint sit natus aut! Unde,
                corporis!
              </p>
            </div>
            <div class="span">
              <div class="date"><span class="date">11 Oct 11:00</span></div>
              <div class="link">
                <a href="#">answer</a>
                <a href="#">coplain</a>
              </div>
            </div>
          </div>
          
          
        </div>
    </section>
</div>

@endsection