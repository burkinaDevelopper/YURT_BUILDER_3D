<?php

use App\Http\Controllers\{
    ProfileController,
    HomeController,
    Yurts3dController,
    NewspaperController,
    LearnController,
    GalleryPhotoController,
    GalleryVideoController,
    PricingController,
    AboutController
};
use App\Http\Controllers\admin\{
    DasboardController,
    SlideController,
    AlbumController,
    PhotoController,
    VideoController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home'])->name('home');


Route::get('/pacific-Yurt', [LearnController::class,'pacificYurt'])->name('pacificYurt');


Route::get('/yurt-builder-3d', [Yurts3dController::class,'build3d'])->name('build3d');

Route::get('/gallery-photo', [GalleryPhotoController::class,'galerryphoto'])->name('galerryphoto');
Route::get('/gallery-photo/{album?}', [GalleryPhotoController::class,'showphotos'])->name('showphotos');

Route::get('/360-virtual-tours', [GalleryPhotoController::class,'virtualtour'])->name('virtualtour');


Route::get('/gallery-video', [GalleryVideoController::class,'galleryvideo'])->name('galleryvideo');


Route::get('/custom-features', [PricingController::class,'customfeatures'])->name('customfeatures');
Route::get('/replacement-parts', [PricingController::class,'replacementparts'])->name('replacementparts');
Route::get('/shipping-info', [PricingController::class,'shippingInfo'])->name('shippingInfo');


Route::get('/environmental', [AboutController::class,'environmental'])->name('environmental');
Route::get('/testimonials', [AboutController::class,'testimonials'])->name('testimonials');
Route::get('/contact', [AboutController::class,'contact'])->name('contact');


Route::post('newspaper',[NewspaperController::class,'store'])->name('newspaper');
Route::get('unsubscribe/{token}',[NewspaperController::class,'delete'])->name('unsubscribe.delete');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dasboad',[DasboardController::class,'dasboard'])->name('dasboard');
    Route::get('/slide',[SlideController::class,'slide'])->name('slide');
    Route::post('/slide',[SlideController::class,'store'])->name('slide.store');
    Route::delete('/slide/{image}',[SlideController::class,'delete'])->name('slide.delete');

    Route::get('/album',[AlbumController::class,'album'])->name('album');
    Route::post('/album',[AlbumController::class,'store'])->name('album.store');
    Route::delete('/album/{album?}',[AlbumController::class,'delete'])->name('album.delete');

    Route::get('/photo/{album?}',[PhotoController::class,'photo'])->name('photo');
    Route::post('/photo/{album?}',[PhotoController::class,'store'])->name('photo.store'); 
    Route::get('/photos',[PhotoController::class,'show'])->name('photo.show'); 
    Route::delete('/photo/{photo}',[PhotoController::class,'delete'])->name('photo.delete'); 

    Route::get('/video',[VideoController::class,'video'])->name('video'); 
    Route::post('/video',[VideoController::class,'store'])->name('video.store'); 
    Route::delete('/video/{video?}',[VideoController::class,'delete'])->name('video.delete'); 
});

require __DIR__.'/auth.php';
