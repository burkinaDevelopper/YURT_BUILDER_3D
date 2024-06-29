@extends('layouts.main')
@section('content')
<div class="box-container limit-width">
   
    <!-- ***** PRICING TABLES ***** -->
    <section class="sec-normal history-section sec-bg1 bg-seccolorstyle nobottompadding">
      <div class="container">
        <div class="popup-gallery">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <h2 class="section-heading mergecolor">AT HOME IN NATURE</h2>
              <p class="section-subheading mergecolor">Pioneers in the design and manufacture of the modern yurt, we have built an unrivalled reputation on our success and constant innovation.</p>
            </div>
           
            <div class="col-md-12 mt-5 position-relative">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @forelse ($slides as $slide)
                  <div class="carousel-item active">
                    <img src="{{$slide->url}}" class="d-block w-100 pb-5" alt="{{$slide->title}}">
                    {{-- <a href="{{asset('assets/img/8-tropical-cupola.jpg')}}" class="image-link" >
                      <div class="zoo-content">
                        <div class="icoo">
                          <i class="icon-eye"></i>
                        </div>
                      </div>
                    </a> --}}
                  </div>
                  @empty
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/28-stove-flashing.jpg')}}" class="d-block w-100 pb-5"  alt="Third slide">
                    
                  </div>
                      
                  @endforelse
                  
                  
                  
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="features" class="history-section feat01  sec-bg2 bg-colorstyle">
      <div class="container">
        <div class="sec-main sec-bg1 bg-colorstyle noshadow">
          <div class="row">
            <div class="col-md-12 col-lg-5 wow animated fadeInUp fast first" >
              <img class="svg" src="{{asset('assets/img/yurt-home.jpg')}}" alt="DBaaS Performance" width="90%">
            </div>
            <div class="col-md-12 col-lg-6 offset-lg-1">
              <div class="info-content">
                <h1 class="fw-bold mb-3 mergecolor">An unprecedented innovation: Yurt Builder 3D™</h1>
                <p class="seccolor">Today, we're taking it a step further by making the design and costing of your yurt simpler than ever with our exclusive tool, Yurt Builder 3D™. Thanks to this tool, you can easily visualize and customize your future yurt, according to your needs and desires.</p>
                <p><em>Pacific Yurts is more than a yurt builder; it's an invitation to discover a unique way of life, in harmony with nature, wherever you are.</em></p>
              </div>
             
            </div>
          </div>
          <hr>
         
        </div>
      </div>
     </section>
     {{-- <section>
      
     </section> --}}
     

     <section class="sec-normal exapath noimage bg-colorstyle nobottompadding">
      <div class="container">
        <div class="sec-main sec-bg1 bg-seccolorstyle noshadow">
          <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1719270934001!6m8!1m7!1sCAoSLEFGMVFpcE5ZNXVlRVo1SFRHTThnMTRYRzBfM0F3WTd0RUNQc3RGM2tOSmdC!2m2!1d43.763252371631!2d-123.084802248!3f314.745225561593!4f-27.665074184511113!5f0.4000000000000002" width="600" height="550" style="border:3;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="sec-normal sec-bg2 bg-seccolorstyle nobottompadding">
      <div class="container">
        <div class="row mb-4">
          <div class="col-sm-12">
            <h2 class="section-heading mergecolor">testimonial</h2>
            <p class="section-subheading mergecolor">They trust us, why shouldn't you?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Marie L.</h4>
              <p class="seccolor">I'm delighted with my Pacific Yurts! The quality is exceptional and the experience of living in nature is incomparable. Bravo to the engineers for this incredible design!</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Jean-Pierre M.</h4>
              <p class="seccolor">We set up our yurt in the mountains and it's simply magical. It's so solid and comfortable. Thank you to the talented designers for this gem of a design.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Isabelle D.</h4>
              <p class="seccolor">Thanks to Pacific Yurts, we can live as close to nature as possible, while enjoying optimum comfort. Many thanks to the engineers for their know-how and creativity.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Olivier R.</h4>
              <p class="seccolor">Our yurt has become our little paradise. The design is so well thought out and the quality is beyond our expectations. Congratulations to the Pacific Yurts team!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Sophie G.</h4>
              <p class="seccolor">Every detail of our yurt is perfect. Our warmest thanks go to the engineers for their dedication and passion, which shines through in every aspect of this construction.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Luc H.</h4>
              <p class="seccolor">Living in a Pacific Yurt is an unforgettable experience. The sturdiness and elegance of the structure are impressive. Thanks to the engineers for this exceptional work. Living in a Pacific Yurts is a dream come true.The design is sublime and the functionality perfect. Thanks to the engineers for their ingenuity and hard work.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Caroline F.</h4>
              <p class="seccolor">Our yurt is the perfect retreat. The quality and durability are outstanding. Many thanks to the engineers for this exceptional creation.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-9 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Antoine V.</h4>
              <p class="seccolor">Nous adorons notre yourte ! Elle est spacieuse, lumineuse et incroyablement bien isolée. Un grand bravo aux ingénieurs pour cette merveille architecturale</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 mt-4">
            <div class="sec-sec sec-bg1 bg-colorstyle noshadow">
              <h4 class="mergecolor">Laurent B.</h4>
              <p class="seccolor">La yourte est au-delà de nos espérances. La qualité des matériaux et la précision de la conception témoignent du grand talent des ingénieurs. Merci pour cette incroyable réalisation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
   
  </div>
@endsection