@extends('layouts.main')
@section('content')

<section class="services blog sec-normal sec-bg3 bg-seccolorstyle">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="section-heading text-white mergecolor">PHOTO GALLERY</h2>
            <p class="section-subheading text-muted mergecolor">To stimulate your creativity, we invite you to browse through our photo gallery. Discover in detail how our yurts blend harmoniously into a variety of landscapes, from majestic mountains and verdant forests to picturesque seashores. </p>
          </div> 
          @forelse ($albums as $album)
              @if ($album->photos_count)
              <div class="col-md-4">
                <img src="{{$album->photos[0]->thumbnail_url}}" data-src="{{$album->photos[0]->thumbnail_url}}" class="img-responsive lazyload" alt="photo" height="240">
                <div class="service-section m-0 bg-colorstyle noshadow">
                  <div class="title mt-0 mergecolor">{{$album->title}}</div>
                  <p class="subtitle seccolor">{{$album->photos_count}} {{Str::plural('Photo',$album->photos_count)}}</p>
                  <hr>
                  <div class="small d-flex align-items-center seccolor">
                    <span class="icon-calendar text-dark h3 mb-0 me-2 seccolor"></span>
                    <span class="ps-2 pe-4">{{$album->created_at->diffForHumans()}}</span>
                  </div>
                  <a href="{{route('showphotos',[$album->slug])}}" class="btn btn-default-yellow-fill">View</a>
                </div>
              </div>
              @endif
          @empty
          <div class="col-md-4">
            <img src="{{asset('assets/img/topbanner03.jpg')}}" data-src="{{asset('assets/img/topbanner03.jpg')}}" class="img-responsive lazyload" alt="photo">
            <div class="service-section m-0 bg-colorstyle noshadow">
              <div class="plans badge feat bg-pink">Empty</div>
              <div class="title mt-0 mergecolor">empty album</div>
              <p class="subtitle seccolor">photo vide...</p>
              <hr>
              
            </div>
          </div>
          @endforelse
          
        </div>
    </div>
    
</div>
<div>{{ $albums->links() }}</div>

  </section>
@endsection