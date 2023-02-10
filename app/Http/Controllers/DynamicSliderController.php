<?php

namespace App\Http\Controllers;

use App\Models\dynamicSlider;
use Illuminate\Http\Request;

class DynamicSliderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $sliders = dynamicSlider::all();
    return view('content.slider.dynamic.index', compact('sliders'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $sliders = dynamicSlider::all();
    return view('content.slider.dynamic.create', compact('sliders'));
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
   * @param  \App\Models\dynamicSlider  $dynamicSlider
   * @return \Illuminate\Http\Response
   */
  public function show(dynamicSlider $dynamicSlider)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\dynamicSlider  $dynamicSlider
   * @return \Illuminate\Http\Response
   */
  public function edit(dynamicSlider $dynamicSlider)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\dynamicSlider  $dynamicSlider
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, dynamicSlider $dynamicSlider)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\dynamicSlider  $dynamicSlider
   * @return \Illuminate\Http\Response
   */
  public function destroy(dynamicSlider $dynamicSlider)
  {
    //
  }
}
