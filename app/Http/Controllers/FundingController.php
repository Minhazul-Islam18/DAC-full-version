<?php

namespace App\Http\Controllers;

use App\Models\funding;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Services\Countries;

class FundingController extends Controller
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
    return view('content.funding.index', compact('countryData'));
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
   * @param  \App\Models\funding  $funding
   * @return \Illuminate\Http\Response
   */
  public function show(funding $funding)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\funding  $funding
   * @return \Illuminate\Http\Response
   */
  public function edit(funding $funding)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\funding  $funding
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, funding $funding)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\funding  $funding
   * @return \Illuminate\Http\Response
   */
  public function destroy(funding $funding)
  {
    //
  }
}
