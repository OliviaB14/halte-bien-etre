<?php

namespace App\Http\Controllers;

use App\ContactSettings;
use App\OpenHours;
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
        $settings = Settings::find(1);
        $contactSettings = ContactSettings::all();
        $openHours = OpenHours::all();
        return view('auth.dashboard', [
            'settings' => $settings,
            'openHours' => $openHours,
            'contactSettings' => $contactSettings,
        ]);
    }
}
