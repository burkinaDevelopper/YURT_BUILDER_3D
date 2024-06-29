<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newspaper;
use Str;
use App\Notifications\NewspaperNotification;
class NewspaperController extends Controller
{
    public function store(){
        request()->validate([
            'email'=>['required','unique:newspapers,email'],
        ]);
        $token=Str::uuid();
        $subscript=Newspaper::create([
            'email'=>request('email'),
            'token'=> $token,
        ]);
        $subscript->notify(new NewspaperNotification($subscript));
        $success='subscription successful';
        return back()->withSuccess($success);
    }
    public function delete($token){
        $unsubscript=Newspaper::whereToken($token)->first();
        abort_if(!$unsubscript,403);
        $unsubscript->delete();
        $data=[
            'title'=>$title='se desabonner',
            'description'=>$title,
        ];
        return view('pages.unsubscribe',$data);
    }
    
}
