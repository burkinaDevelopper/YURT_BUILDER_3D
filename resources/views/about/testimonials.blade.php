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
              <div class="heading">TESTIMONIALS</div>
              <div class="subheading">what people think about usCliquez pour utiliser cette solution</div>
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
              
              <div class="row">
                <div class="col-md-12 col-lg-12 mb-80">
                  <div class="sec-main sec-bg1 bg-colorstyle noshadow">
                    <div class="heading blog"><a class="mergecolor" href="#">Comments</a></div>
                    <div class="line"></div>
                    <div class="media">
                      <a href="#" class="plans badge badge-pill feat bg-green">Reply</a>
                      <img src="./assets/img/topbanner01.jpg" data-src="./assets/img/topbanner01.jpg" class="media-object lazyload" alt="photo">
                      <div class="media-body">
                        <h4 class="media-heading"><a class="mergecolor" href="">Miss Lucia</a></h4>
                        <div class="text-blog mt-0 d-flex align-items-center seccolor">
                          <i class="icon-calendar"></i>
                          <span class="ps-2 pe-4"> April 11, 2023</span>
                          <i class="icon-clock"></i>
                          <span class="ps-2"> 8.00 pm</span>
                        </div>
                        <div class="text-comments seccolor">
                            We bought a Pacific Yurts and are impressed by the quality and durability. Even after many years, it remains in perfect condition.
                        </div>
                      </div>
                    </div><hr>
                    <div class="media answer">
                      <a href="#" class="plans badge badge-pill feat bg-green">Reply</a>
                      <img src="./assets/img/topbanner04.jpg" data-src="./assets/img/topbanner04.jpg" class="media-object lazyload" alt="photo">
                      <div class="media-body">
                        <h4 class="media-heading"><a class="mergecolor" href="">Mr. White</a></h4>
                        <div class="text-blog mt-0 d-flex align-items-center seccolor">
                          <i class="icon-calendar"></i>
                          <span class="ps-2 pe-4"> April 11, 2022</span>
                          <i class="icon-clock"></i>
                          <span class="ps-2"> 8.00 pm</span>
                        </div>
                        <div class="text-comments seccolor">
                            Pacific Yurts' customer service is exceptional. They answered all our questions promptly and helped us choose the perfect options for our yurt.
                        </div>
                      </div>
                    </div><hr>
                    <div class="media">
                      <a href="#" class="plans badge badge-pill feat bg-green">Reply</a>
                      <img src="./assets/img/topbanner06.jpg" data-src="./assets/img/topbanner06.jpg" class="media-object lazyload" alt="photo">
                      <div class="media-body">
                        <h4 class="media-heading"><a class="mergecolor" href="">Orlova Ekaterina</a></h4>
                        <div class="text-blog mt-0 d-flex align-items-center seccolor">
                          <i class="icon-calendar"></i>
                          <span class="ps-2 pe-4"> April 11, 2021</span>
                          <i class="icon-man"></i>
                          <span class="ps-2"> by Philips</span>
                        </div>
                        <div class="text-comments seccolor">
                            The yurt was surprisingly easy to set up, thanks to the clear instructions provided by Pacific Yurts. We were able to assemble it in no time.
                        </div>
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