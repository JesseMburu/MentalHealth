<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Post;


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_mentor_view',[AdminController::class,'addview']);

Route::post('/upload_mentor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showmentor',[AdminController::class,'showmentor']);

Route::get('/deletementor/{id}',[AdminController::class,'deletementor']);

Route::get('/updatementor/{id}',[AdminController::class,'updatementor']);

Route::post('/editmentor/{id}',[AdminController::class,'editmentor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/create_post',[HomeController::class,'create_post'])->middleware('auth');
Route::post('/user_post',[HomeController::class,'user_post'])->middleware('auth');

Route::get('/post_page',[AdminController::class,'post_page']);

Route::post('/add_post',[AdminController::class,'add_post']);

Route::get('/show_post',[AdminController::class,'show_post']);

Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);

Route::get('/edit_page/{id}',[AdminController::class,'edit_page']);

Route::post('/update_post/{id}',[AdminController::class,'update_post']);

Route::get('/post_details/{id}',[HomeController::class,'post_details']);

Route::get('/my_post',[HomeController::class,'my_post'])->middleware('auth');

Route::get('/my_post_del/{id}',[HomeController::class,'my_post_del'])->middleware('auth');

Route::get('/post_update_page/{id}',[HomeController::class,'post_update_page'])->middleware('auth');

Route::post('/update_post_data/{id}',[HomeController::class,'update_post_data'])->middleware('auth');

Route::get('/accept_post/{id}',[AdminController::class,'accept_post']);

Route::get('/reject_post/{id}',[AdminController::class,'reject_post']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/contact',[HomeController::class,'contact']);

Route::post('/submit_contact_form', [ContactFormController::class, 'store'])->name('contact.store');

Route::get('/survey',[HomeController::class,'survey']);
Route::post('/submit-survey',[HomeController::class,'submitSurvey']);

