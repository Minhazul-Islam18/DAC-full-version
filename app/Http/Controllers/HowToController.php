<?php

namespace App\Http\Controllers;

use App\Models\howTo;
use Illuminate\Http\Request;

class HowToController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $how_to = howTo::all();
    return view('content.how-to.index', compact('how_to'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $how_to = howTo::all();
    return view('content.how-to.index', compact('how_to'));
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
   * @param  \App\Models\howTo  $howTo
   * @return \Illuminate\Http\Response
   */
  public function show(howTo $howTo)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\howTo  $howTo
   * @return \Illuminate\Http\Response
   */
  public function edit(howTo $howTo)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\howTo  $howTo
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, howTo $howTo)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\howTo  $howTo
   * @return \Illuminate\Http\Response
   */
  public function destroy(howTo $howTo)
  {
    //
  }
}