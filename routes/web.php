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

Route::get('/itProger-kurs', function () {
    return view('home');
})->name('home');
Route::get('/itProger-kurs/about', function () {
    return view('about');
})->name('about');
Route::get('/itProger-kurs/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/itProger-kurs/contact/all', 'ContactControler@allData')->name('contact-data');
Route::get('/itProger-kurs/contact/all/{id}',
    'ContactControler@showOneMessage')->name('contact-data-one');
Route::get('/itProger-kurs/contact/all/{id}/update',
    'ContactControler@updateMessage')->name('contact-update');
Route::get('/itProger-kurs/contact/all/{id}/delete',
    'ContactControler@deleteMessage')->name('contact-delete');
Route::post('/itProger-kurs/contact/all/{id}/update',
    'ContactControler@updateMessageSubmit')->name('contact-update-submit');
Route::post('/itProger-kurs/contact/submit', 'ContactControler@submit')->name('contact-form');

