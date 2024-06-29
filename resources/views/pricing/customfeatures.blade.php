@extends('layouts.main')
@section('content')
<div class="box-container limit-width">
  
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
         <img src="{{asset('assets/img/standard-custom-features.jpg')}}" alt="">
        </div>
      </div>
    </div>
    <!-- ***** KNOWLEDGEBASE ***** -->
    <section id="gotop" class="blog motpath pb-80 bg-colorstyle">
      <div class="container">
        <div class="row">
          <!-- sidebar -->
          <div class="col-md-12 col-lg-4">
            <aside id="sidebar" class="sidebar mt-80 sec-bg1 bg-seccolorstyle noshadow">
              <div class="menu categories clear">
                <h5 class="mergecolor"><b>Chapters</b></h5>
                <hr>
                <div class="heading pt-2"><a href="#gotop" id="showall" class="gocheck active seccolor">Standard and Custom Yurt Characteristics</a></div>
                <div class="heading pt-2"><a href="#gotop" class="gocheck showSingle seccolor " target="1">Wall options for Yurts: Customization and superior quality</a></div>
                <div class="heading pt-2"><a href="#gotop" class="gocheck showSingle seccolor" target="2">Insulation Options for Yurts: Comfort and Energy Efficiency</a></div>
                <div class="heading pt-2"><a href="#gotop" class="gocheck showSingle seccolor" target="3">Dome and Center Ring options for Yurts: Customization and Quality</a></div>
                <div class="heading pt-2"><a href="#gotop" class="gocheck showSingle seccolor" target="4"> Snow and Wind Options : Preparing and securing your yurt</a></div>
                
              </div>
            </aside>
          </div>
          <div class="pt-35 col-md-12 col-lg-8">
            <div id="sidebar_content" class="wrap-blog">
              <div class="row">
                <div class="col-md-12 col-lg-12 knowledge">
                  <div id="div3" class="wrapper targetDiv mt-5 bg-seccolorstyle noshadow">
                    <h5><a href="" class="category"><b>Standard and Custom Yurt Characteristics: A Complete Guide to Choosing the Best Yurt</b></a></h5><hr>
                    <h2>Quality Yurts: Commitment in every detail</h2>
                    <div class="blog-info">
                      <p class="seccolor">When you order a Pacific Yurt, you're investing in a yurt with the highest quality standards in the industry. As pioneers of the modern lattice-wall yurt, we began a journey of innovation that continues to this day. </p>
                       <p class="seccolor">
                        We offer a wide range of customized options to adapt and enhance your yurt to your specific needs and site requirements. Each option is meticulously tested in our own facilities and on our own yurts, guaranteeing optimum reliability and durability.
                        </p>
                        <p class="seccolor"> Our options include energy-efficient glass windows and beautiful French doors. These additions allow you to create a unique space that's uniquely yours, while enjoying the exceptional comfort and performance of Pacific Yurt yurts.</p>
                        <p class="seccolor"> Investing in a yurt from Pacific Yurt means choosing quality, innovation and the ability to customize your living space to perfectly meet your expectations.</p>
                    </div><br>
                    <div class="blog-info">
                      <img src="{{asset('assets/img/2022-pricing-table.jpg')}}" alt="">
                    </div><br>
                  </div>
                  <div id="div2" class="wrapper targetDiv mt-5 bg-seccolorstyle noshadow">
                    <h5><a href="" class="category"><b>Wall options for Yurts: Customization and superior quality</b></a></h5><hr>
                    <div class="blog-info">
                        <img src="{{asset('assets/img/sidecover.jpg')}}" alt="">
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Acrylic Polyester Side Cover: Our acrylic-coated polyester side cover offers proven performance and exceptional durability. Available in a wide variety of colors, it allows for aesthetic customization of your yurt. See our fabric option card for details.
                        </p>
                      <p class="seccolor">Additional Fabric Windows: Add fabric windows around your yurt to enjoy panoramic views, enhance interior design, and increase natural light and ventilation. These windows create a sense of open space, adding comfort and style to your yurt.</p>
                      <p class="seccolor">Glass Window System: Unique in the industry, our low-emissivity thermal glass window system is mounted on a curved frame to perfectly fit the circular shape of the yurt. This innovative design avoids the "flat panel" appearance of other models, and ensures a watertight seal thanks to our exclusive fabric edging. This system is customizable with finishes such as shelves, blinds or curtains, and includes a finishing kit and removable flyscreen. Please note that this system is not available for 12′ and 14′ models.</p>
                      <p class="seccolor">Window Awning Frame: this adjustable anodized aluminum frame supports the window sash, creating an overhang that allows windows to be left open for optimal ventilation. Ideal for enhancing the interior comfort of your yurt.</p>
                      <p class="seccolor">Stove flashing: Our double metal flashing allows the stove pipe to exit through the side cover of the yurt. Made from galvanized sheet metal and coated to resist corrosion, this flashing is both functional and aesthetically pleasing.</p>
                    </div><br>
                  </div>
                  <div id="div1" class="wrapper targetDiv mt-5 bg-seccolorstyle noshadow">
                    <h5><b><a href="" class="category">Insulation Options for Yurts: Comfort and Energy Efficiency</a></b> </h5><hr>
                    
                    <div class="blog-info">
                      <p class="seccolor">Reflective Insulating Liners: Inspired by the technology used by astronauts, our seven-layer insulating liners, developed by NASA, guarantee optimum thermal comfort all year round. Covered in an elegant ivory fabric, they reflect heat in both directions, keeping the yurt warm in winter and cool in summer. Each lining is custom-designed to fit perfectly over your windows and doors.</p>
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Insulated Window Coverings: Made with reflective insulation and a fabric covering to match the interior insulation of your roof and walls, our insulated window coverings offer effective protection against the cold while allowing easy installation and flexible use. You can insulate some windows while leaving others open to enjoy natural light and outside views.</p>
                    </div><br>
                    <div class="blog-info">
                        <img src="{{asset('assets/img/insulation-sm1.jpg')}}" alt="">
                    </div><br>
                   
                   
                  </div>
                  <div id="div4" class="wrapper targetDiv mt-5 bg-seccolorstyle noshadow">
                    <h5><a href="" class="category"><b>Dome and Center Ring options for Yurts: Customization and Quality</b></a></h5><hr>
                   
                    <div class="blog-info">
                        <img src="{{asset('assets/img/dome-options.jpg')}}" alt="">
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Dome opening: Equip your yurt with specialized hardware and an opening mechanism to evacuate warm air accumulated in the ceiling, providing cooling comfort through natural convection. For maximum air circulation, add a ceiling fan using our dedicated bracket.
                    </p>
                    <p class="seccolor">Electric dome opening: Opt for our electric dome opening with remote control, for easy management of your yurt's ventilation.</p>
                    <p class="seccolor">Tinted Dome: Ideal for hot, sunny environments, our tinted dome blocks up to 60% of solar heat while preserving natural light.
                    </p>
                    <p class="seccolor">Center Ring Insertion: Customize your yurt with our wooden center ring frame, accompanied by an optional mosquito net or shade screen for insect protection and reduced heat gain.</p>
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Dome Screen: Add an elegant touch with our dome-shaped screen, available as a mosquito net or shade screen.</p>
                      <p class="seccolor">Fan Bracket: Easily install a ceiling fan in the center of your yurt with our carved wooden bracket, offering optimum air circulation all year round.</p>
                    </div>
                  </div>
                  <div id="div5" class="wrapper targetDiv mt-5 bg-seccolorstyle noshadow">
                    <h5><a href="" class="category"><b>Snow and Wind Options : Preparing and securing your yurt</b></a> </h5><hr>
                    <div class="blog-info">
                      <p class="seccolor">Snow and Wind Options: Strengthen Your Yurt's Structure with Our Special Kits
                        The following snow and wind options have been carefully designed to enhance the structural capacity of your yurt, while maintaining our reputation for superior quality and outstanding aesthetics. Be sure to check the specific snow load requirements for your region before making your choice.</p>
                                            </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Snow & Wind Kit: Specially adapted to heavy snow and strong wind conditions, this kit includes high-quality, kiln-dried supports, secured with our custom hardware and a cable-locking system to reinforce roof rigidity. Opt for stainless steel hardware for harsh marine environments.</p>
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Perimeter blocking: Pre-finished in 2×4, these elements install between vertical supports to meet IBC standards. Screws included. Available exclusively with the snow and wind kit.</p>
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">
                        Cable tie: Provides extra protection in high winds by securing the central ring to the ground. Easy to install and remove as required. Available exclusively with snow and wind kit.</p>
                    </div><br>
                    
                    <div class="blog-info">
                      <p class="seccolor">Upgraded 2×6 Rafters, Center Ring and Hardware: Reinforce rafters, center ring and standard hardware to increase snow load capacity on our 20′, 24′ and 30′ yurts, available with our special snow and wind kit.</p>
                    </div><br>
                    <div class="blog-info">
                      <p class="seccolor">Center Column: add a powder-coated steel column support to further increase snow load capacity, ideal for large yurts in high snow conditions, such as ski resorts. Available on our 20′, 24′ and 30′ yurts with the snow and wind kit, as well as the 2×6 rafter upgrade.
                    </p>
                    </div>
                    <div class="blog-info">
                      <p class="seccolor">Testimonial from a User: "Pacific Yurts have proven to perform very well here in Sundance, even in our harshest snow and wind winters. Our guests are impressed with the aesthetics and comfort of our yurts."</p>
                    </div>
                    <div class="blog-info">
                        <img src="{{asset('assets/img/snowandwindkit.jpg')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** HELP ***** -->
   
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
  </div>
@endsection