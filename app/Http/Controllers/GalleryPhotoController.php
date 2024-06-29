<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\{
    Album
};
class GalleryPhotoController extends Controller
{
    protected $perPage = 12;
    public function galerryphoto(){
        $albums=Album::withCount(['photos'=> function(Builder $query){
            $query->orderBy('created_at', 'desc');
        }])->paginate($this->perPage);
        $data=[
            'title'=>'title',
            'albums'=>$albums,
        ];
        return view('pages.galerryphoto',$data);
    }

    public function showphotos(Album $album){
        $album->load('photos');
        $data=[
            'title'=>'title',
            'album'=>$album,
        ];
        return view('pages.showphotos',$data);
    }
    public function virtualtour(){
        $data=[
            'title'=>'title',
        ];
        return view('pages.virtualtour',$data);
    }
    
}
