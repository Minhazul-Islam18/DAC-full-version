<?php

namespace App\Http\Controllers;

use App\Models\features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $features = features::all();
    return view('content.features.index', compact('features'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $features = features::all();
    return view('content.features.index', compact('features'));
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
   * @param  \App\Models\features  $features
   * @return \Illuminate\Http\Response
   */
  public function show(features $features)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\features  $features
   * @return \Illuminate\Http\Response
   */
  public function edit(features $features)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\features  $features
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, features $features)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\features  $features
   * @return \Illuminate\Http\Response
   */
  public function destroy(features $features)
  {
    //
  }
}
