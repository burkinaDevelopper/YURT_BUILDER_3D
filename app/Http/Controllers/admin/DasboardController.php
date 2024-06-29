<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newspaper;

class DasboardController extends Controller
{
    public function dasboard(){
        $data=[
            'newspapers'=>Newspaper::get(),
        ];
        return view('admin.dasboard',$data);
    }
}
