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
                   
                </div>
            </div>
        </div>
        <div class="card mb-4">
            @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
           @endif
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                photos
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>photo</th>
                            <th>id</th>
                            <th>album</th>
                            <th>title</th>
                            <th>created</th>
                            <th>deleted</th>
                        </tr>
                    </thead>
                    
                   <tbody>
                    @forelse ($photos as $photo)
                    <tr>
                        <td><img src="{{$photo->url}}" alt="{{$photo->title}}" width="60" height="60"  class="rounded-circle"></td>
                        <td>{{$photo->id}}</td>
                        <td>{{$photo->album->title}}</td>
                        <td>{{$photo->title}}</td>
                        <td>{{$photo->created_at->diffForHumans()}}</td>
                        <td><form action="{{route('photo.delete',[$photo->slug])}}" method="post">@csrf @method('delete') <button class="btn btn-danger" type="submit">deleted</button></form></td>
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