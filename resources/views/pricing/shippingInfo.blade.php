@extends('layouts.main')
@section('content')
{{-- <img src="{{asset('assets/img/shipping-header2.jpg')}}" alt="" width="100%"> --}}
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
                
                <h2 class="section-heading mt-3 mergecolor">Yurt Shipping and Pickup: A Complete Guide to Worry-Free Delivery</h2>
                <p class="section-subheading mb-4 seccolor">Yurt Shipping and Pickup: Essential Information on Delays and Delivery Times <br> Important Note: Due to current industry-wide supply chain and shipping disruptions, yurt shipments may be delayed. Estimated transit times and tracking information provided by freight carriers may not be reliable at this time.
                     While we make every effort to ensure that Pacific yurt orders are completed as close to the estimated date as possible, some circumstances are beyond our control. We recommend planning accordingly. Pacific Yurts is not responsible for disruptions caused by delays in shipping, delivery or availability.
                    We thank you for your patience and understanding during this difficult time.</p>
                <p class="seccolor">Yurt shipping costs : Estimates and Essential Information  What are the shipping costs for yurts? Shipping costs vary according to several factors, such as the size of the yurt and the specific features chosen. We'll be happy to provide you with an accurate estimate of shipping costs based on your requirements.</p>
                <p class="seccolor">Crating for domestic shipment:
                    Packing and crating charges for domestic shipping are $700 per yurt, unless you choose to pick it up directly from our store. For glass window systems, a supplement of $200 is required for 1 to 8 windows.</p>
                <p class="seccolor">Crating for international shipping:
                    An estimate of CIF rates (cost, insurance, freight) can be provided upon request. Packing and crating charges for international shipments are $750. The glass window system requires an additional $300 for 1 to 8 windows. Please check with your customs agent for more information on any applicable import fees.</p>
               
                <p class="seccolor">How do I arrange and pay for shipping?
                    Pacific Yurts will schedule shipment of your yurt to the specified delivery address, however you will be the party contracting with the freight company for delivery of your yurt. This allows our customers to take advantage of our discounted freight rates. Except by prior arrangement, your yurt will be shipped freight collect. Freight charges are paid directly to the freight carrier prior to or at the time of delivery. We will provide you with tracking information and a contact phone number for the freight carrier after the yurt leaves our facility. We recommend calling the freight company at that time to coordinate the delivery of your shipment and payment of the freight charges.</p>
                
    
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