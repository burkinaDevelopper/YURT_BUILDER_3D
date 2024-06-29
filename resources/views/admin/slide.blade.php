@extends('layouts.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ADD </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manager slide home</li>
        </ol>
        
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Slide</h3></div>
                        <div class="card-body">
                            @if(session('success'))
                  		      <div class="alert alert-success">{{ session('success') }}</div>
                  	         @endif
                            <form action="{{route('slide.store')}}" method="post" enctype="multipart/form-data">
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
                            <th>slide</th>
                            <th>id</th>
                            <th>title</th>
                            <th>created</th>
                            <th>deleted</th>
                        </tr>
                    </thead>
                    
                   <tbody>
                    @forelse ($slides as $slide)
                    <tr>
                        <td><img src="{{$slide->url}}" alt="{{$slide->title}}" width="60" height="60"  class="rounded-circle"></td>
                        <td>{{$slide->id}}</td>
                        <td>{{$slide->title}}</td>
                        <td>{{$slide->created_at->diffForHumans()}}</td>
                        <td><form action="{{route('slide.delete',[$slide->id])}}" method="post">@csrf @method('delete') <button class="btn btn-danger" type="submit">deleted</button></form></td>
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