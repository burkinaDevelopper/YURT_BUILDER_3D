<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Home,
    Album,
    Video
};
use Auth;
class VideoController extends Controller
{
    public function video(){
        $data=[
            'title'=>'title',
            'videos'=>Video::get(),
        ];
        return view('admin.video',$data);
    }
    public function store(Request $request){
        $request->validate([
            'title'=>['required'],
            'link'=>['required'],
           ]);
        $video=Auth::user()->videos()->create([
            'title'=>$request->title,
            'link'=>$request->link,
        ]);
        $message=$video->title." has been save";
        return back()->withSuccess($message);
    }
    public function delete(Video $video){
        abort_if($video->user_id!==auth()->id(),403);
        $message=$video->title."has been delete";
        $video->delete();
        return back()->withStatus($message);
     }
}
