<?php

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;


Route::get('/', function () {
   return redirect()->route('books.index'); 
});

Route::resource('books',BookController::class)
   ->only('index' , 'show');
   ;

Route::resource('books.reviews', ReviewController::class)
   ->Scoped(['review' => 'book'])
   ->only('create','store');
;


  
