<?php

namespace App\Http\Controllers;

use App\ContactSettings;
use App\OpenHours;
use App\PagesSettings;
use App\Partners;
use App\Services;
use App\Settings;
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

    public function pages(Request $request)
    {

        $email = ContactSettings::where('label', 'email')->first();
        $email->value = $request->email;
        $email->save();
        $telephone = ContactSettings::where('label', 'telephone')->first();
        $telephone->value = $request->telephone;
        $telephone->save();
        $facebook = ContactSettings::where('label', 'facebook')->first();
        $facebook->value = $request->facebook;
        $facebook->save();
        $presentation = ContactSettings::where('label', 'presentation')->first();
        $presentation->value = $request->presentation;
        $presentation->save();

        $monParcours = PagesSettings::where('pageTitle', 'qui-sommes-nous')
            ->where('section', 'monParcours')->first();
        $monParcours->body = $request->monParcours;
        $monParcours->save();

        $mesPrestationsDescription = PagesSettings::where('pageTitle', 'mes-prestations')
            ->where('section', 'description')->first();
        $mesPrestationsDescription->body = $request->mesPrestationsDescription;
        $mesPrestationsDescription->save();

        $description = PagesSettings::where('pageTitle', 'partenariats')
            ->where('section', 'description')->first();
        $description->body = $request->description;
        $description->save();

        return redirect()->to('tableau-de-bord');
    }

    public function services(Request $request)
    {
        $services = Services::all();

        foreach ($services as $service){
            $service->title = $request->get('serviceTitle'.$service->id);
            $service->price = $request->get('servicePrice'.$service->id);
            $service->length = $request->get('serviceLength'.$service->id);
            $service->description = $request->get('serviceDescription'.$service->id);
            $service->save();
        }
        return redirect()->to('tableau-de-bord');
    }

    public function service(Request $request) {

        try {
            $service = new Services();
            $service->fill($request->all());
            $service->save();
            return redirect()->to('tableau-de-bord');
        } catch (\Exception $exception){
            print $exception;
        }
    }

    public function delService($id) {
        try {
            $service = Services::where('id', $id)->first();
            $service->delete();
            return redirect()->to('tableau-de-bord');

        } catch (\Exception $exception){
            print $exception;
        }
    }
}
