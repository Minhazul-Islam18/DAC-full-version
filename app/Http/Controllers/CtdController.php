<?php

namespace App\Http\Controllers;

use App\Models\ctd;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class CtdController extends Controller
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
    return view('content.ctd_management.list', compact('countryData'));
  }
  public function previewCTD()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.ctd_management.preview', compact('countryData'));
  }
  public function typeConfigure()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.ctd.index', compact('countryData'));
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
   * @param  \App\Models\ctd  $ctd
   * @return \Illuminate\Http\Response
   */
  public function show(ctd $ctd)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\ctd  $ctd
   * @return \Illuminate\Http\Response
   */
  public function edit(ctd $ctd)
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.ctd_management.edit', compact('countryData'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\ctd  $ctd
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, ctd $ctd)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\ctd  $ctd
   * @return \Illuminate\Http\Response
   */
  public function destroy(ctd $ctd)
  {
    //
  }
}
