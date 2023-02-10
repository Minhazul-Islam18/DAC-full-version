<?php

namespace App\Http\Controllers;

use App\Models\FAQCategory;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class FAQCategoryController extends Controller
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
    return view('content.faq.category', compact('countryData'));
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
   * @param  \App\Models\FAQCategory  $fAQCategory
   * @return \Illuminate\Http\Response
   */
  public function show(FAQCategory $fAQCategory)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FAQCategory  $fAQCategory
   * @return \Illuminate\Http\Response
   */
  public function edit(FAQCategory $fAQCategory)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FAQCategory  $fAQCategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, FAQCategory $fAQCategory)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FAQCategory  $fAQCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(FAQCategory $fAQCategory)
  {
    //
  }
}
