<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Video
};
class GalleryVideoController extends Controller
{
    public function galleryvideo(){
        $data=[
            'title'=>'title',
            'videos'=>Video::get(),
            
        ];
        return view('pages.galleryvideo',$data);
    }
}
