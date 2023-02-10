<?php

namespace App\Http\Controllers;

use App\Models\commissions;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class CommissionsController extends Controller
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
    return view('content.commissions.index', compact('countryData'));
  }

  public function settings()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.commissions.settings', compact('countryData'));
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
   * @param  \App\Models\commissions  $commissions
   * @return \Illuminate\Http\Response
   */
  public function show(commissions $commissions)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\commissions  $commissions
   * @return \Illuminate\Http\Response
   */
  public function edit(commissions $commissions)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\commissions  $commissions
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, commissions $commissions)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\commissions  $commissions
   * @return \Illuminate\Http\Response
   */
  public function destroy(commissions $commissions)
  {
    //
  }
}