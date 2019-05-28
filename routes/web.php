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

use App\ContactSettings;
use App\OpenHours;
use App\Partners;
use App\Services;
use App\Settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\PagesSettings as Pages;

Route::get('/', function () {
    $openHours = OpenHours::where('open', 1)->get();
    $settings = Settings::find(1);
    $services = Services::all();
    return view('welcome', [
        'openHours' => $openHours,
        'settings' => $settings,
        'services' => $services,
        'current_page' => 'welcome'
    ]);
})->name('welcome');

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
    $partners = Partners::all();
    $infos = Pages::where('pageTitle', 'partenariats')->first();
    return view('partnerships', [
        'partners' => $partners,
        'infos' => $infos,
        'current_page' => 'partenariats'
    ]);
})->name('partenariats');

Route::get('contact', function () {
    $email = ContactSettings::where('label', 'email')->first()->value;
    $telephone = ContactSettings::where('label', 'telephone')->first()->value;
    $facebook = ContactSettings::where('label', 'facebook')->first()->value;
    $presentation = ContactSettings::where('label', 'presentation')->first()->value;

    $openHours = OpenHours::where('open', 1)->get();
    return view('contact', [
        'facebook' => $facebook,
        'presentation' => $presentation,
        'telephone' => $telephone,
        'email' => $email,
        'openHours' => $openHours,
        'current_page' => 'contact'
    ]);
})->name('contact');

Auth::routes();

Route::get('/réglages', 'HomeController@index')->name('home');
Route::get('/tableau-de-bord', 'HomeController@dashboard')->name('dashboard');

Route::get('/nouveau-service', function() {
    return view('controllers.newService');
})->name('newService');

Route::get('/nouveau-partenaire', function() {
    return view('controllers.newPartner');
})->name('newPartner');

Route::post('/newPartner', 'DashboardController@newPartner')
    ->name('partner.post');
