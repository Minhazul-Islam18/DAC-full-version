<?php

namespace App\Http\Controllers;

use App\Models\introSection;
use Illuminate\Http\Request;

class IntroSectionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $intro = introSection::all();
    return view('content.intro.index', compact('intro'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $intro = introSection::all();
    return view('content.intro.create', compact('intro'));
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
   * @param  \App\Models\introSection  $introSection
   * @return \Illuminate\Http\Response
   */
  public function show(introSection $introSection)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\introSection  $introSection
   * @return \Illuminate\Http\Response
   */
  public function edit(introSection $introSection)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\introSection  $introSection
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, introSection $introSection)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\introSection  $introSection
   * @return \Illuminate\Http\Response
   */
  public function destroy(introSection $introSection)
  {
    //
  }
}
