<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Home,
    Album
};

use DB,Str,Storage,Auth;
class AlbumController extends Controller
{
    public function album(){
        $data=[
            'title'=>'title',
            'albums'=>Album::get(),
        ];
        return view('admin.album',$data);
    }
    public function store(Request $request,){
       $request->validate([
        'title'=>['required']
       ]);
       $album = Auth::user()->albums()->create([
          'title'=>$request->title
       ]);
       $message='album'.$album->title.' is saved well';
       return redirect(route('photo',[$album->slug]))->withSuccess($message);
    }
    public function delete(Album $album){
        $album->load('photos');
        abort_if($album->user_id!==auth()->id(),403);
        foreach ($album->photos as $photo) {
            Storage::delete($photo->path);
            Storage::delete($photo->thumbnail_path);
        };
        $message=$album->title."has been delete";
        $album->delete();
        return back()->withStatus($message);
     }
}
