<?php

namespace App\Http\Controllers;

use App\Models\blogCategory;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class BlogCategoryController extends Controller
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
    return view('content.blog.category', compact('countryData'));
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
   * @param  \App\Models\blogCategory  $blogCategory
   * @return \Illuminate\Http\Response
   */
  public function show(blogCategory $blogCategory)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\blogCategory  $blogCategory
   * @return \Illuminate\Http\Response
   */
  public function edit(blogCategory $blogCategory)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\blogCategory  $blogCategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, blogCategory $blogCategory)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\blogCategory  $blogCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(blogCategory $blogCategory)
  {
    //
  }
}