<?php

namespace App\Http\Controllers;

use App\Models\callToAction;
use Illuminate\Http\Request;

class CallToActionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $callToAction = callToAction::all();
    return view('content.callToAction.index', compact('callToAction'));
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
   * @param  \App\Models\callToAction  $callToAction
   * @return \Illuminate\Http\Response
   */
  public function show(callToAction $callToAction)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\callToAction  $callToAction
   * @return \Illuminate\Http\Response
   */
  public function edit(callToAction $callToAction)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\callToAction  $callToAction
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, callToAction $callToAction)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\callToAction  $callToAction
   * @return \Illuminate\Http\Response
   */
  public function destroy(callToAction $callToAction)
  {
    //
  }
}
