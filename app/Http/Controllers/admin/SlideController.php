<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use DB,Str,Storage;

class SlideController extends Controller
{
    public function slide(){
        $data=[
            'title'=>'title',
            'slides'=>Home::get(),
        ];
        return view('admin.slide',$data);
    }
    public function store(Request $request){
        $request->validate([
            'title'=>['required','string'],
            'image'=>['file','image','required'],
        ]);
        if ($request->file('image')->isValid()) {
            $ext = $request->file('image')->extension();
            $filename = Str::uuid().'.'.$ext;
            $originalPath = $request->file('image')->storeAs('slide', $filename);
            $slide=auth()->user()->homes()->create([
                'title'=>request('title'),
                'path'=>$originalPath,
                'url'=>Storage::url($originalPath),
            ]);
        };
        $message='slide'.$slide->title.' is saved well';
        return back()->withSuccess($message);
    }
    public function delete(Home $image){
       $image->load('user');
       abort_if($image->user_id!==auth()->id(),403);
       Storage::delete($image->path);
       $message=$image->title."has been delete";
       $image->delete();
       return back()->withStatus($message);
    }
}
