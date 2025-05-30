<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('app.home');
});

Route::get('/modal', [TestController::class, 'modal'])->name('modal');
Route::post('/modal', [TestController::class, 'modalPost'])->name('modal.post');
//    ->middleware([\Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class]);
Route::post('/home', [TestController::class, 'testSubmit'])->name('home.submit');
