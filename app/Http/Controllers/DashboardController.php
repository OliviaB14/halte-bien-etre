<?php

namespace App\Http\Controllers;

use App\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function newPartner(Request $request)
    {
        $validated = $request->validate([
            'partnerName' => 'required|max:255',
            'partnerLink' => 'nullable|max:255',
            'logoPath' => 'required',
        ]);

        //dd(storage_path());

        try {
            $partner = new Partners();
            $partner->name = $validated['partnerName'];
            $partner->link = $validated['partnerLink'];
            $partner->logoPath = "storage/".$request->file('logoPath')->store('mypartners');
            $partner->save();
            return redirect()->to('tableau-de-bord');
        } catch (\Exception $e) {
            dd($e);
        }

    }
}
