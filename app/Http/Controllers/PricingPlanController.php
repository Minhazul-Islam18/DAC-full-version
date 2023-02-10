<?php

namespace App\Http\Controllers;

use App\Models\pricingPlan;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Services\Countries;

class PricingPlanController extends Controller
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
    return view('content.pricing.index', compact('countryData'));
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
   * @param  \App\Models\pricingPlan  $pricingPlan
   * @return \Illuminate\Http\Response
   */
  public function show(pricingPlan $pricingPlan)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\pricingPlan  $pricingPlan
   * @return \Illuminate\Http\Response
   */
  public function edit(pricingPlan $pricingPlan)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\pricingPlan  $pricingPlan
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, pricingPlan $pricingPlan)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\pricingPlan  $pricingPlan
   * @return \Illuminate\Http\Response
   */
  public function destroy(pricingPlan $pricingPlan)
  {
    //
  }
}
