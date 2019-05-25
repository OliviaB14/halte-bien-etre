<?php

namespace App\Http\Controllers;

use App\ContactSettings;
use App\OpenHours;
use App\PagesSettings as Pages;
use App\Services;
use App\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.dashboard');
    }

    public function dashboard()
    {
        $services = Services::all();

        $settings = Settings::find(1);
        $contactSettings = ContactSettings::all();
        $openHours = OpenHours::all();

        /*pages*/
        $quiSommesNous = Pages::where('pageTitle', 'qui-sommes-nous')->get();
        $mesPrestations = Pages::where('pageTitle', 'mes-prestations')->get();

        return view('auth.dashboard', [
            'services' => $services,
            'settings' => $settings,
            'openHours' => $openHours,
            'contactSettings' => $contactSettings,
            'quiSommesNous' => $quiSommesNous,
            'mesPrestations' => $mesPrestations,
        ]);
    }
}
