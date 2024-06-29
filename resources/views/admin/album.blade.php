@extends('layouts.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ADD </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manager album</li>
        </ol>
        
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Album</h3></div>
                        <div class="card-body">
                            @if(session('success'))
                  		      <div class="alert alert-success">{{ session('success') }}</div>
                  	         @endif
                            <form action="{{route('album.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" placeholder="title for seo"  name="title" required/>
                                    <label for="inputEmail">title</label>
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
                            <th>number photo</th>
                            <th>title</th>
                            <th>created</th>
                            <th>add photo</th>
                            <th>deleted</th>
                        </tr>
                    </thead>
                    
                   <tbody>
                    @forelse ($albums as $album)
                    <tr>
                        {{-- {{route('album.delete',[$album->slug])}} --}}
                        <td>{{$album->photos->count()}}</td>
                        <td>{{$album->title}}</td>
                        <td>{{$album->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('photo',[$album->slug])}}"> 
                            <button class="btn btn-success" type="submit">add</button></a></td>
                        <td>
                            <form action="{{route('album.delete',[$album->slug])}}" method="post" onclick='confirm("all photos in the album will be deleted")' >@csrf @method('delete') 
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