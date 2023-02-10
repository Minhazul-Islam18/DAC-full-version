<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Services\Countries;

class GalleryController extends Controller
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
    return view('content.gallery.index', compact('countryData'));
  }

  public function settings()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.gallery.settings', compact('countryData'));
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
   * @param  \App\Models\gallery  $gallery
   * @return \Illuminate\Http\Response
   */
  public function show(gallery $gallery)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\gallery  $gallery
   * @return \Illuminate\Http\Response
   */
  public function edit(gallery $gallery)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\gallery  $gallery
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, gallery $gallery)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\gallery  $gallery
   * @return \Illuminate\Http\Response
   */
  public function destroy(gallery $gallery)
  {
    //
  }
}
