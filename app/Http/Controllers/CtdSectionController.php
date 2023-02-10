<?php

namespace App\Http\Controllers;

use App\Models\ctdSection;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class CtdSectionController extends Controller
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
    return view('content.homepage-ctd.index', compact('countryData'));
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
   * @param  \App\Models\ctdSection  $ctdSection
   * @return \Illuminate\Http\Response
   */
  public function show(ctdSection $ctdSection)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\ctdSection  $ctdSection
   * @return \Illuminate\Http\Response
   */
  public function edit(ctdSection $ctdSection)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\ctdSection  $ctdSection
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, ctdSection $ctdSection)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\ctdSection  $ctdSection
   * @return \Illuminate\Http\Response
   */
  public function destroy(ctdSection $ctdSection)
  {
    //
  }
}
