<?php

namespace App\Http\Controllers;

use App\Models\videoSlider;
use Illuminate\Http\Request;

class VideoSliderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $sliders = videoSlider::all();
    return view('content.slider.video.index', compact('sliders'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $sliders = videoSlider::all();
    return view('content.slider.video.create', compact('sliders'));
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
   * @param  \App\Models\videoSlider  $videoSlider
   * @return \Illuminate\Http\Response
   */
  public function show(videoSlider $videoSlider)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\videoSlider  $videoSlider
   * @return \Illuminate\Http\Response
   */
  public function edit(videoSlider $videoSlider)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\videoSlider  $videoSlider
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, videoSlider $videoSlider)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\videoSlider  $videoSlider
   * @return \Illuminate\Http\Response
   */
  public function destroy(videoSlider $videoSlider)
  {
    //
  }
}