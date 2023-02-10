<?php

namespace App\Http\Controllers;

use App\Models\blogArchives;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class BlogArchivesController extends Controller
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
    return view('content.blog.archives', compact('countryData'));
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
   * @param  \App\Models\blogArchives  $blogArchives
   * @return \Illuminate\Http\Response
   */
  public function show(blogArchives $blogArchives)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\blogArchives  $blogArchives
   * @return \Illuminate\Http\Response
   */
  public function edit(blogArchives $blogArchives)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\blogArchives  $blogArchives
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, blogArchives $blogArchives)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\blogArchives  $blogArchives
   * @return \Illuminate\Http\Response
   */
  public function destroy(blogArchives $blogArchives)
  {
    //
  }
}