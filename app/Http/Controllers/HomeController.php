<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    public function home(){
        $data=[
            'title'=>'titre',
            'slides'=>Home::get(),
        ];
        return view('pages.home',$data);
    }
}
