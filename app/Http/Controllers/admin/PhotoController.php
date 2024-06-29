<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\{
    Home,
    Photo,
    Album
};
use DB,Str,Storage;
class PhotoController extends Controller
{
    public function photo(Album $album){
        abort_if($album->user_id!=auth()->id(),403);
        $data=[
            'title'=>'title',
            'albums'=>Album::get(),
            'album'=>$album,
            'slides'=>Home::get(),
        ];
        return view('admin.photo',$data);
    }

    public function show(){
        $data=[
            'title'=>'title',
            'photos'=>Photo::get(),
        ];
        return view('admin.photos',$data);
    }

    public function store(Request $request,Album $album){
        abort_if($album->user_id!=auth()->id(),403);
        $request->validate([
         'title'=>['required'],
         'image'=>['file','image','required'],
        ]);
        if ($request->file('image')->isValid()) {
            $ext = $request->file('image')->extension();
            $filename = Str::uuid().'.'.$ext;
            $originalPath = $request->file('image')->storeAs('photo', $filename);
            $thumbnail_path='photo/thumbnail/'.$filename;
            $image =Image::read($request->file('image'));
            $thumbnailImage=$image->resize(420, 240);
            $thumbnailImage=$thumbnailImage->encode();
            Storage::put($thumbnail_path,$thumbnailImage);

            $photo=$album->photos()->create([
                'title'=>request('title'),
                'path'=>$originalPath,
                'thumbnail_path'=>$thumbnail_path,
                'url'=>Storage::url($originalPath),
                'thumbnail_url'=>Storage::url($thumbnail_path),
            ]);
        };
        $message='photo '.$photo->title.' is saved well';
        return back()->withSuccess($message);
     }
     public function delete(Photo $photo){
        Storage::delete($photo->path);
        Storage::delete($photo->thumbnail_path);
        $message=$photo->title."has been delete";
        $photo->delete();
        return back()->withStatus($message);
     }
}
