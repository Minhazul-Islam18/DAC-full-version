<?php

namespace App\Http\Controllers;

use App\Models\statisticsSection;
use Illuminate\Http\Request;

class StatisticsSectionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $intro = statisticsSection::all();
    return view('content.statistics.index', compact('intro'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $intro = statisticsSection::all();
    return view('content.statistics.index', compact('intro'));
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
   * @param  \App\Models\statisticsSection  $statisticsSection
   * @return \Illuminate\Http\Response
   */
  public function show(statisticsSection $statisticsSection)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\statisticsSection  $statisticsSection
   * @return \Illuminate\Http\Response
   */
  public function edit(statisticsSection $statisticsSection)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\statisticsSection  $statisticsSection
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, statisticsSection $statisticsSection)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\statisticsSection  $statisticsSection
   * @return \Illuminate\Http\Response
   */
  public function destroy(statisticsSection $statisticsSection)
  {
    //
  }
}