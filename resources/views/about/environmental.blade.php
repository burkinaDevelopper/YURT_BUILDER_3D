@extends('layouts.main')
@section('content')
{{-- <img src="{{asset('assets/img/environmental-initiatives.jpg')}}" alt="" width="100%"> --}}
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
   
    <!-- ***** PAYMENT METHODS ***** -->
    <section class="services sec-normal bg-colorstyle">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="sec-main sec-bg1 pay bg-seccolorstyle noshadow">
                
                <h2 class="section-heading mt-3 mergecolor">YENVIRONMENTAL INITIATIVES</h2>
                <p class="section-subheading mb-4 seccolor">Since our inception, Pacific Yurts has maintained a steadfast commitment to environmentally responsible business practices. Indeed, the founding idea for our company was to help people get closer to nature while minimizing their impact on it.

                    The yurts we make are very resource efficient, providing a maximum amount of enclosed space while using a minimal amount of material as compared to standard construction. The yurt and platform can be removed leaving virtually no trace.</p>
                <p class="seccolor">Other initiatives Pacific Yurts is committed to include:</p>
                <p class="seccolor">
                    <ul>
                        <li  class="seccolor">Pacific Yurts is proud to incorporate lumber from sustainable forests certified by SFI (Sustainable Forestry Initiative).</li>
                        <li  class="seccolor">We are “greening” our electricity. A minimum of 25% of the electricity used in our manufacturing facilities comes from renewable wind power.</li>
                        <li class="seccolor">We hand select at the mill second-growth lumber from carefully managed forests. We choose the appropriate grade and length of boards for each yurt component in order to minimize waste during production.</li>
                        <li class="seccolor">We recycle sawdust and small wood trim pieces left over from the production process to local gardeners and crafters.</li>
                        <li class="seccolor">To avoid air pollution, we hand finish, rather than atomize/spray, our wood framework.</li>
                        <li class="seccolor">We use soy inks in printed material and recycled content paper whenever possible.</li>
                        <li class="seccolor">Our production facility is designed to utilize an abundance of natural and energy-efficient lighting.</li>
                        <li class="seccolor">Our wood shop, fabric shop and office actively participate in a cardboard and paper recycling program.</li>
                        <li class="seccolor">Fabric remnants from our polyester side covers are made into shopping and duffle bags.</li>
                        <li class="seccolor">We have “naturescaped” around our production facility, installed bird boxes, and carefully preserved a grove of 100-year-old oak trees on our property.</li>
                        <li class="seccolor">We encourage customers to participate in our environmental efforts by returning used top covers and vinyl side covers for recycling. Called “cradle to cradle” recycling, the fabrics are shipped back to the manufacturer to be ground up to make new products such as gym and exercise mats. This keeps waste out of landfills and reduces the need for virgin materials. Click here for information on how to participate.</li>
                        <li class="seccolor">Our current manufacturing facility bears little resemblance to the old dairy barn in which we produced our first modern yurt. But the founding principles of our company remain unchanged – we are still committed to leaving big impressions on our community and customers and small ones on our environment.</li>
                    </ul>
                </p>
                
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
    <footer id="footer"> </footer>
  </div>
@endsection