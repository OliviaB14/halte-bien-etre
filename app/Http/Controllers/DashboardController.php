<?php

namespace App\Http\Controllers;

use App\Partners;
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
}
