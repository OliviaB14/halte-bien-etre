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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\PagesSettings as Pages;

Route::get('/', function () {
    return view('welcome', [
        'current_page' => 'welcome'
    ]);
})->name('home');

Route::resource('/tarifs', 'TarifsController', [
    'except' => ['show']
]);

Route::get('qui-sommes-nous', function () {
    $monParcours = Pages::where('pageTitle', 'qui-sommes-nous')
        ->where('section', 'monParcours')
        ->first();
    return view('about', [
        'current_page' => 'qui-sommes-nous',
        'monParcours' => $monParcours,
    ]);
})->name('about');

Route::get('prestations', function () {
    return view('prestations', [
        'current_page' => 'prestations'
    ]);
})->name('prestations');

Route::get('partenariats', function () {
    return view('partnerships', [
        'current_page' => 'partenariats'
    ]);
})->name('partenariats');

Route::get('contact', function () {
    return view('contact', [
        'current_page' => 'contact'
    ]);
})->name('contact');

Auth::routes();

Route::get('/réglages', 'HomeController@index')->name('home');
Route::get('/tableau-de-bord', 'HomeController@dashboard')->name('dashboard');

Route::get('/nouveau-service', function() {
    return view('controllers.newService');
})->name('newService');
