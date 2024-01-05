<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/catalog', function () {
    return view('catalog', [
        "title"=> "Catalog",
        "img" => "",
        "judul" => "Pemetik bintang",
        "penulis" => "Ivan",
        "sinopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. E
        ius, facere! Numquam veritatis, deserunt labore dolore natus dignissimos delectus quisquam ad consectetur, 
        iste ratione sint id fugit commodi nisi provident minus ipsa qui possimus? In accusamus consectetur velit optio saepe rem?"
        
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=> "About"
    ]) ;
});


