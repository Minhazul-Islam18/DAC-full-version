<?php

namespace App\Http\Controllers;

use App\Models\partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $testimonials = partners::all();
    return view('content.partners.index', compact('testimonials'));
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
   * @param  \App\Models\partners  $partners
   * @return \Illuminate\Http\Response
   */
  public function show(partners $partners)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\partners  $partners
   * @return \Illuminate\Http\Response
   */
  public function edit(partners $partners)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\partners  $partners
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, partners $partners)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\partners  $partners
   * @return \Illuminate\Http\Response
   */
  public function destroy(partners $partners)
  {
    //
  }
}
