@extends('layouts.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ADD </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manager video</li>
        </ol>
        <div class="alert alert-success">
            <p>how to add a youtube video?</p>
            <p><strong>1.Go to youtube, click on share (at the bottom of the video)</strong></p>
            <p><strong>2.then click on integrate</strong></p>
            <p>3.then click on copy</p>
        </div>
        <div class="alert alert-danger">
            <strong>important!!</strong>
            <p>you must modify the width and height by ( width="410" height="333") on the link you have copied before pasting it.</p>
            <p>example:</p>
            <p>{{'<iframe width="410" height="333" src="https://www.youtube.com/embed/NdpjiS5zvTQ?si=pNP891D1z4epErpp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'}}</p>
        </div>
        
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Album</h3></div>
                        <div class="card-body">
                            @if(session('success'))
                  		      <div class="alert alert-success">{{ session('success') }}</div>
                  	         @endif
                            <form action="{{route('video.store')}}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" placeholder="title for seo"  name="title" required/>
                                    <label for="inputEmail">title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="link" cols="30" rows="10" class="form-control"  style="height: 211px;" 
                                    ></textarea>
                                    <label for="inputEmail">Enter link youtube</label>
                                </div>
                                {{-- <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="file"  name="image" required/>
                                  
                                </div> --}}
                               
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
           @endif
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Slide
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>created</th>
                            <th>deleted</th>
                        </tr>
                    </thead>
                    
                   <tbody>
                    @forelse ($videos as $video)
                    <tr>
                        {{-- {{route('album.delete',[$album->slug])}} --}}
                        <td>{{$video->id}}</td>
                        <td>{{$video->title}}</td>
                        <td>{{$video->created_at->diffForHumans()}}</td>
                        <td>
                            <form action="{{route('video.delete',[$video->slug])}}" method="post" onclick='confirm("the video will be deleted")' >@csrf @method('delete') 
                                <button class="btn btn-danger" type="submit">deleted</button></form></td>
                        </tr>
                    @empty
                    <tr>
                        <td><img src="" alt="" width="60" height="60"  class="rounded-circle"></td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td> 
                        <td>empty</td> 
                    </tr>    
                    @endforelse
                   </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
    
@endsection