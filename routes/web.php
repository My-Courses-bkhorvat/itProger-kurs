<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact/all', 'ContactControler@allData')->name('contact-data');
Route::get('/contact/all/{id}',
    'ContactControler@showOneMessage')->name('contact-data-one');
Route::get('/contact/all/{id}/update',
    'ContactControler@updateMessage')->name('contact-update');
Route::get('/contact/all/{id}/delete',
    'ContactControler@deleteMessage')->name('contact-delete');
Route::post('/contact/all/{id}/update',
    'ContactControler@updateMessageSubmit')->name('contact-update-submit');
Route::post('/contact/submit', 'ContactControler@submit')->name('contact-form');

