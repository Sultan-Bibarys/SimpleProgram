@extends('layouts.main')
@section('content')
<section class="add_post">
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mr-auto">
                <div class="image">
                  <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input class = "col-md-4" type="submit" name="submit" value="Upload">
                </form>
                </div>
            </div>
    
            <div class="col-md-6">
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  
                  <div class="col-md-12 form-group">
                    <label for="name" class="col-form-label">Title</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email" class="col-form-label">Category</label>
                    <input type="text" class="form-control" name="email" id="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email" class="col-form-label">Location</label>
                    <input type="text" class="form-control" name="email" id="email">
                  </div>
                </div>
              </form>
    
              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message" class="col-form-label">Message</label>
              <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <input type="submit" value="Send" class="btn btn-primary rounded-0 py-2 px-4">
              <span class="submitting"></span>
            </div>
          </div>
    </div>
</section>

@endsection