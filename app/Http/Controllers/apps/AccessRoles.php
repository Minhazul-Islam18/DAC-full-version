<?php

namespace App\Http\Controllers\apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PragmaRX\Countries\Package\Countries;

class AccessRoles extends Controller
{
  public function index()
  {
    $countries = new Countries();
    $countryData = $countries
        ->all()
        ->pluck('name.common')
        ->toArray();
    return view('content.apps.app-access-roles', compact('countryData'));
  }
}
