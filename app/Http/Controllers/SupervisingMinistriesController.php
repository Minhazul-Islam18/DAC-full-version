<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupervisingMinistries;
use PragmaRX\Countries\Package\Countries;

class SupervisingMinistriesController extends Controller
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
    return view('content.supervising_ministries.index', compact('countryData'));
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
   * @param  \App\Models\SupervisingMinistries  $supervisingMinistries
   * @return \Illuminate\Http\Response
   */
  public function show(SupervisingMinistries $supervisingMinistries)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\SupervisingMinistries  $supervisingMinistries
   * @return \Illuminate\Http\Response
   */
  public function edit(SupervisingMinistries $supervisingMinistries)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\SupervisingMinistries  $supervisingMinistries
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, SupervisingMinistries $supervisingMinistries)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\SupervisingMinistries  $supervisingMinistries
   * @return \Illuminate\Http\Response
   */
  public function destroy(SupervisingMinistries $supervisingMinistries)
  {
    //
  }
}