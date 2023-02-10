<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Services\Countries;

class ServicesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.services.index', compact('countryData'));
  }
  public function settings()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.services.settings', compact('countryData'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function show(services $services)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function edit(services $services)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, services $services)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function destroy(services $services)
  {
    //
  }
}
