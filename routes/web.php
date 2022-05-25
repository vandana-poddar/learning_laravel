<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo;
use App\Http\Controllers\marvel;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\customer;
use App\Models\About;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/course', function () {
//     return view('courses');
// });

// Route::get('/',[demo::class, 'index']);
// Route::resource('/tony',marvel::class);



// Route::get('/demo',function(){
//     echo "hello in this demo world";
// });

// Route::any('/demo',function(){
//     echo "hello in this demo world";
// });//we can call this url with post as well

// //calling routeswith data

// Route::get('/getdata/{name}/{id?}',function($name,$id=null){
//     // echo $name;
//     // echo $id;
//     $data = compact('name','id');//comapact is like array in php
//     return view ('demo')->with($data);
// });

// Route::get('/register',[registrationcontroller::class,'index']);
// Route::post('/register',[registrationcontroller::class,'register']);
Route::get('/customer',[customer::class,'index']);
Route::post('/customer',[customer::class,'store']);
Route::get('/customer/view',[customer::class,'view']);
Route::delete('/customer/delete/{$id}',[customer::class,'destroy']);
Route::get('/about',function(){
    $abouts = About::all();
    echo "<pre>";
    print_r($abouts->toArray());
});