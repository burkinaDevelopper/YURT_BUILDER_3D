@extends('layouts.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ADD </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manager photo home</li>
        </ol>
        
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">add photo in {{$album->title}}</h3></div>
                        <div class="card-body">
                            @if(session('success'))
                  		      <div class="alert alert-success">{{ session('success') }}</div>
                  	         @endif
                            <form action="{{route('photo.store',[$album->slug])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" placeholder="title for seo"  name="title" required/>
                                    <label for="inputEmail">title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="file"  name="image" required/>
                                  
                                </div>
                               
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>
    
@endsection