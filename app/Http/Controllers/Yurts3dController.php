<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yurts3dController extends Controller
{
    public function build3d(){
        return view('pages.build3d');
    }
}
