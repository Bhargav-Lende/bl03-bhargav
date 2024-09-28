<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::post('/language.switch', LanguageController::class)->name('language.switch');

$routes = config('info.routes');

Route::post('/language.switch', LanguageController::class)->name('language.switch');


foreach ($routes as $route) {
    Route::get($route['path'], function () use ($route) {
        return view($route['view']);
    })->name($route['name']);
}
Route::get('/enjoy',function (){
    return view('enjoy');

})->name("enjoy");

Route::fallback(function () {
    return view('errors.404');
})->name("404");

use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');