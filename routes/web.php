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
    $services = Services::all();
    $presentation = \App\PagesSettings::where('pageTitle', 'mes-prestations')
        ->where('section', 'description')->first();
    return view('prestations', [
        'current_page' => 'prestations',
        'services' => $services,
        'presentation' => $presentation
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

Route::get('/service/{id?}', function($id = null) {
    $icons = [
        'flaticon-001-meditation',
        'flaticon-002-yin-yang',
        'flaticon-003-lotus-flower',
        'flaticon-004-buddha',
        'flaticon-005-jainism',
        'flaticon-006-swastika',
        'flaticon-007-om',
        'flaticon-008-yoga',
        'flaticon-009-yoga-1',
        'flaticon-010-chakra',
        'flaticon-011-hamsa',
        'flaticon-012-mandala',
        'flaticon-013-prayer',
        'flaticon-014-mudra',
        'flaticon-015-stones',
        'flaticon-016-incense',
        'flaticon-017-monk',
        'flaticon-018-prayer-1',
        'flaticon-019-chakra-1',
        'flaticon-020-candle',
        'flaticon-021-yoga-mat',
        'flaticon-022-ankh',
        'flaticon-023-cross',
        'flaticon-024-eye-of-ra',
        'flaticon-025-god',
        'flaticon-026-dharma-wheel',
        'flaticon-027-endless-knot',
        'flaticon-028-chakra-2',
        'flaticon-029-tea',
        'flaticon-030-bible',
        'flaticon-031-triskele',
        'flaticon-032-chakra-3',
        'flaticon-033-chakra-4',
        'flaticon-034-yin-yang-1',
        'flaticon-035-chinese',
        'flaticon-036-shinto',
        'flaticon-037-koi',
        'flaticon-038-triquetra',
        'flaticon-039-fish',
        'flaticon-040-islam',
        'flaticon-041-torah',
        'flaticon-042-peace-sign',
        'flaticon-043-zen',
        'flaticon-044-aromatherapy',
        'flaticon-045-menorah',
        'flaticon-046-kippah',
        'flaticon-047-angel',
        'flaticon-048-church',
        'flaticon-049-shrine',
        'flaticon-050-mosque',
    ];
    if($id == null) {
        return view('controllers.newService', [
            'icons' => $icons,
        ]);
    } else {
        $service = Services::find($id);
        return view('controllers.newService', ['service' => $service,
            'icons' => $icons,
        ]);
    }
})->name('newService');

Route::get('/partenaire/{id?}', function($id = null) {
    if($id == null) {
        return view('controllers.newPartner');
    } else {
        $partner = Partners::find($id);
        return view('controllers.newPartner', ['partner' => $partner]);
    }
})->name('newPartner');

Route::post('/newPartner', 'DashboardController@newPartner')
    ->name('partner.post');

Route::post('/settings', 'DashboardController@general')
    ->name('settings.post');

Route::post('/pages', 'DashboardController@pages')
    ->name('pages.post');

Route::post('/service', 'DashboardController@service')
    ->name('service.post');

Route::post('/delService/{id}', 'DashboardController@delService')
    ->name('service.delete');


Route::post('/send', 'PagesController@sendMail')->name('sendMail');
