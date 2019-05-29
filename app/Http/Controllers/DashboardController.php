<?php

namespace App\Http\Controllers;

use App\OpenHours;
use App\Partners;
use App\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function newPartner(Request $request)
    {
        $validated = $request->validate([
            'partnerName' => 'required|max:255',
            'partnerLink' => 'nullable|max:255',
            'logoPath' => 'required|nullable|image',
        ]);

        if($request->has('partnerId')) {
            $partner = Partners::find($request->has('partnerId'));
        } else {
            $partner = new Partners();
        }

        if($validated['logoPath'] != null) {
            $partner->logoPath = "storage/".$request->file('logoPath')->store('mypartners');
        }

        try {
            $partner->name = $validated['partnerName'];
            $partner->link = $validated['partnerLink'];
            $partner->save();
            return redirect()->to('tableau-de-bord');
        } catch (\Exception $e) {
            dd($e);
        }

    }

    public function general(Request $request) {

        $general = Settings::find(1);
        $validated = $request->validate([
            'websiteTitle' => 'required|string|max:255',
            'slogan' => 'nullable|string|max:255',
        ]);

        $general->fill($validated);
        $general->save();

        $openHours = OpenHours::all();

        foreach ($openHours as $day){
            if(isset($request->get($day->day)['open'])) {
                $day->open = true;
                $day->openTime = $request->get($day->day)['openTime'];
                $day->closeTime = $request->get($day->day)['closeTime'];
            } else {
                $day->open = false;
            }
            $day->save();
        }
        return redirect()->to('tableau-de-bord');
    }
}
