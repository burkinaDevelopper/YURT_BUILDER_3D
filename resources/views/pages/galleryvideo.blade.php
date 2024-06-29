@extends('layouts.main')
@section('content')

<section class="services sec-normal scrollme motpath toppadding bg-colorstyle">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="section-heading mergecolor">VIDEO GALLERY</h2>
            <p class="section-subheading mergecolor">The video is a great way to see what it's really like to live with a Pacific Yurt. Watch HD videos made by our proud owners to learn about life in a yurt, how to build one, and much more! And if you have an awesome video to share, let us know!</p>
          </div>
         
         @forelse ($videos as $video)
         <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="-60" data-easeinout="0">
           {!! $video->link !!}
          </div> 
         @empty
         <div class="col-sm-12 col-md-4">
            <div class="service-section bg-seccolorstyle noshadow">
              <div class="plans badge feat bg-pink">empty</div> 
            </div>
          </div>
         @endforelse
          
        
         
        </div>
      </div>
    </div>
  </section>
@endsection