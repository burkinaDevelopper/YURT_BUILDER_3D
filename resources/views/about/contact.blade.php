@extends('layouts.main')
@section('content')
<div class="box-container limit-width">
    <!-- ***** SETTINGS ****** -->
    <section id="settings"> </section>
    <!-- ***** LOADING PAGE ****** -->
    <div id="spinner-area">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
        <div class="spinner-txt">Antler...</div>
      </div>
    </div>
    <!-- ***** FRAME MODE ****** -->
    <div class="body-borders" data-border="20">
      <div class="top-border bg-white"></div>
      <div class="right-border bg-white"></div>
      <div class="bottom-border bg-white"></div>
      <div class="left-border bg-white"></div>
    </div>
    <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
    <header id="header"> </header>
    <!-- ***** BANNER ***** -->
    <div class="top-header">
      <div class="total-grad-inverse"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="wrapper">
              <div class="heading">Help and information</div>
              <div class="subheading">You can leave us a message for more information</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** BLOG DETAILS ***** -->
    <section class="shopping blog sec-normal pt-80 pb-80 sec-bg2 motpath bg-seccolorstyle">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="wrap-blog">
             
              <div class="sec-main sec-bg1 bg-colorstyle noshadow">
               
                <div class="cd-filter-block mb-0">
                  <div class="cd-filter-content p-0 sec-bx">
                    <div class="heading blog"><a class="mergecolor" href="#">Leave a Comment</a></div>
                    <div class="row">
                      <div class="col-md-12 col-lg-6 position-relative">
                        <label><i class="fas fa-user-tie"></i></label>
                        <input id="fullname" type="text" name="fullname" placeholder="Full Name" required="">
                      </div>
                      <div class="col-md-12 col-lg-6 position-relative">
                        <label><i class="fas fa-envelope"></i></label>
                        <input id="email" type="email" name="email" placeholder="Email Address" required="">
                      </div>
                      <div class="col-md-12 position-relative">
                        <label><i class="fas fa-file-alt"></i></label>
                        <input id="subject" type="text" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="col-md-12 position-relative">
                        <div class="form-group mt-4">
                          <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-5">
                        <input name="newsletter" type="checkbox" id="checkbox" class="filter">
                        <label for="checkbox" class="checkbox-label c-grey mb-4 seccolor" ><span>I have read and accept the terms of the privacy policy - <a href="legal" class="golink">RGPD</a></span></label>
                        <button type="submit" value="Submit" class="btn btn-default-yellow-fill">Submit Comment</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar -->
         
        </div>
      </div>
    </section>
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
    <footer id="footer"> </footer>
  </div>
@endsection