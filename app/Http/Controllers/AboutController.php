<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function environmental(){
        return view('about.environmental');
    }

    public function testimonials(){
        return view('about.testimonials');
    }
    public function contact(){
        return view('about.contact');
    }
}
