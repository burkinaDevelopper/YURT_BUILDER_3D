@extends('layouts.main')
@section('content')

<div class="box-container limit-width">
    <!-- ***** SETTINGS ****** -->
   
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
    
    <!-- ***** SLIDER ***** -->
    <section class="main-container slider">
      <div class="silder-container">
        <div class="carousel header-main-slider">
          <!-- 1 Slider -->
          <div class="carousel-cell total-grad-pink-blue-intense">
            <div class="slider-content">
              <div class="container">
                <img class="svg custom-element-right" src="{{asset('assets/img/th-interior.jpg')}}" alt="Dedicated Server 3d">
                <div class="col-sm-12 col-md-8 px-0">
                  <h1 data-aos="fade-up" data-aos-duration="800">WHY PACIFIC YURTS? <div class="animatype"> <span id="typed3"></span></div></h1>
                  <p data-aos="fade-up" data-aos-duration="1200" class="subheading">
                    Discover the Unrivalled Quality of Pacific Yurts: World Leader in Innovation and Customer Service
                  </p>
                  <a href="vps" class="btn btn-default-yellow-fill me-3 mt-3">Get Prices</a>
                  <a href="vps" class="btn btn-default-pink-fill mt-3">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <!-- 2 Slider -->
          <div class="carousel-cell total-grad-pink-blue-intense">
            <div class="slider-content">
              <div class="container">
                <img class="svg custom-element-right" src="{{asset('assets/img/19-Fabric-Windows.jpg')}}" alt="Cloud VPS Server">
                <div class="col-sm-12 col-md-6 px-0">
                  <h1 data-aos="fade-up" data-aos-duration="800">What is a Yurt?</h1>
                  <p data-aos="fade-up" data-aos-duration="1200">
                    <i class="c-pink feat fas fa-check-circle me-2"></i>Fast installation<br>
                    <i class="c-pink feat fas fa-check-circle me-2"></i> High performance<br>
                    <i class="c-pink feat fas fa-check-circle me-2"></i>high resistance
                  </p>
                  <a href="vps" class="btn btn-default-yellow-fill me-3 mt-3">Get Prices</a>
                  <a href="vps" class="btn btn-default-pink-fill mt-3">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-up-slider p-0 bg-colorstyle specialposition">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="wrapper first text-start noshadow">
              <div class="top-content bg-seccolorstyle topradius">
                <div class="title">for personal use</div>
                <div class="fromer seccolor">Vacation home or cabin</div>
                <div class="price mergecolor">Create Your Dream Space with Pacific Yurts Customizable Yurts!</div>
                
              </div>
              <ul class="list-info">
                <li>Flexibility and speed of installation</li>
                <li>Comfort and adaptability</li>
                <li>Savings and convenience</li>
                <li>Post-installation versatility</li>
                <li>Harmonious integration with Nature</li>
                <li>A Durable Temporary Solution</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="wrapper text-start noshadow">
              <div class="top-content bg-seccolorstyle topradius">
                <div class="title">for professional use</div>
                <div class="fromer seccolor">Build your bottom line with Pacific Yurts</div>
                <div class="price mergecolor">Discover How Yurts Can Transform Your Income</div>
              </div>
              <ul class="list-info bg-purple">
                <li>An Unforgettable Customer Experience</li>
                <li>A continuous source of income</li>
                <li>Management and maintenance efficiency</li>
                <li>Ecological and sustainable appeal</li>
                <li>Flexibility and adaptability</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="wrapper third text-start noshadow">
              <div class="top-content bg-seccolorstyle topradius">
                
                <div class="title">for government use</div>
                <div class="fromer seccolor">revenue for government</div>
                <div class="price mergecolor">Discover how yurts can generate revenue for public recreation areas!</div>
              </div>
              <ul class="list-info">
                <li>Revenue Optimization</li>
                <li>Attractiveness and Accrued Attendance</li>
                <li>Versatile applications</li>
                <li>Sustainability and Visitor Protection</li>
                <li>Reduced Ecological Impact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** LOAD BALANCING ***** -->
    <section class="balancing sec-normal pb-80 bg-colorstyle">
      <div class="h-services">
        <div class="container">
          <div class="randomline">
            <div class="bigline"></div>
            <div class="smallline"></div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="section-heading mergecolor">Vacation Home</h2>
              <p class="section-subheading mergecolor">Stay in harmony with nature</p>
            </div>
            <div class="col-md-12">
              <div class="wrap-service load">
                <div class="wow animated fadeInUp fast">
                   <img class="svg mt-50 w-100 ltr-img d-block" src="{{asset('assets/img/commercialheader21.jpg')}}" alt="Load Balancing">
                 {{-- <img class="svg mt-50 w-100 rtl-img d-none" src="assets/patterns/balancing-rtl.svg" alt="Load Balancing"> --}}
                </div>
                <div class="row text-info text-center">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <svg class="division-ontop bg-white d-none" viewBox="0 0 1440 150">
      <path fill="#fdd700" fill-opacity="1" d="M0,96L120,85.3C240,75,480,53,720,53.3C960,53,1200,75,1320,85.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
      </path>
    </svg>
    
    <!-- ***** FEATURES ***** -->
    <section class="services sec-normal sec-bg4 exapath">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="section-heading">WHAT IS A YURT?</h2>
              <p class="section-subheading">A Modern Adaptation: The Pacific Yurt for </p>
              <div>
                  <p><strong>Government</strong></p>
                  <p>The Pacific Yurt embodies a contemporary adaptation of the traditional shelter used by Central Asian nomads for centuries. This harmonious marriage of ancestral wisdom and modern technology creates a versatile, durable and environmentally-friendly structure that meets the varied needs of modern users. Here's how this unique structure can be effectively integrated into government projects.</p>
              </div>
              <div>
                <p><strong>Structural and ecological efficiency</strong></p>
                <p>The yurt's compact shape and design combining tension and compression elements maximizes strength while minimizing the use of materials. This structural efficiency is crucial for government projects seeking to optimize resources while ensuring the durability and safety of facilities.</p>
              </div>
              <div>
                <p><strong>Comfort and flexibility of use</strong></p>
                <p>Set on wooden platforms supported by simple post-and-beam systems, Pacific yurts offer unique year-round comfort. This flexibility allows them to be used as administrative offices, mobile health centers, temporary classrooms, or even shelters for workers on remote sites. Their ability to provide a comfortable and functional environment in any season is a major asset.</p>
              </div>
              
            </div>
            <div class="col-sm-12 col-md-4 wow animated fadeInUp fast" >
                <img  src="{{asset('assets/img/GSP21.png')}}" alt="" >
            </div>
            {{-- height="1890" --}}
            <div class="col-sm-12 col-md-4 wow animated fadeInUp">
                <img class="svg" src="{{asset('assets/img/exploded-view.png')}}" alt="" >
            </div>
            <div class="col-sm-12 col-md-4 wow animated fadeInUp fast">
                <img class="svg" src="{{asset('assets/img/government-recreation.jpg')}}" alt="" >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** MAP ***** -->
    <section class="services maping sec-normal sec-grad-grey-to-grey bottomhalfpadding">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="section-heading text-white mergecolor">book your yurt quickly</h2>
              <p class="section-subheading text-muted mergecolor">with us, the customer is king: your satisfaction is our priority</p>
            </div>
            <div class="col-md-12 pt-5 scrollme position-relative">
              <img src="assets/patterns/map.svg" class="lazyload w-10 animateme" alt="Load Balancing" data-when="view" data-from="1" data-to="0" data-opacity="0">
              <span class="datacenters montreal" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Montreal" data-bs-content="our different service areas"></span>
              <span class="datacenters newyork" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="New York" data-bs-content="our different service areas" ></span>
              <span class="datacenters portugal"  data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Portugal" data-bs-content="our different service areas"></span>
              <span class="datacenters london" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="London" data-bs-content="our different service areas"></span>
              <span class="datacenters moskow" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Moskow"  data-bs-content="our different service areas"></span>
              <span class="datacenters hongkong" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Hong Kong" data-bs-content="our different service areas"></span>
              <span class="datacenters singapure" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Singapure" data-bs-content="our different service areas"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** CASE STUDY ***** -->
    
    <!-- ***** HELP ***** -->
    <section class="services help pt-4 pb-80 bg-colorstyle">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container bg-seccolorstyle noshadow">
              <a href="javascript:void(Tawk_API.toggle())" class="help-item">
                <div class="img">
                 
                </div>
                <div class="inform">
                  <div class="title mergecolor">advises</div>
                 
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container bg-seccolorstyle noshadow">
              <a href="contact" class="help-item">
                <div class="img">
                  
                </div>
                <div class="inform">
                  <div class="title mergecolor">technical support</div>
                  
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container bg-seccolorstyle noshadow">
              <a href="knowledgebase-list" class="help-item">
                <div class="img">
                 
                </div>
                <div class="inform">
                  <div class="title mergecolor">guaranteed</div>
                 
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
@endsection