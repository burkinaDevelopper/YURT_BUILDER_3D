<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function customfeatures(){
        return view('pricing.customfeatures');
    }
    public function replacementparts(){
        return view('pricing.replacementparts');
    }
    public function shippingInfo(){
        return view('pricing.shippingInfo');
    }
}
