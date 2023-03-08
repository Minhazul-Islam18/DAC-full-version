<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Services\Countries;

class HomepageController extends Controller
{
    public function ctaView()
    {
        $countries = new Countries();
        $countryData = $countries
          ->all()
          ->pluck('name.common')
          ->toArray();
        return view('content.callToAction.index', compact('countryData'));
    }
}
