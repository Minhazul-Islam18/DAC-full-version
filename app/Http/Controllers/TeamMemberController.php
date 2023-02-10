<?php

namespace App\Http\Controllers;

use App\Models\teamMember;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class TeamMemberController extends Controller
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
    return view('content.team.index', compact('countryData'));
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
   * @param  \App\Models\teamMember  $teamMember
   * @return \Illuminate\Http\Response
   */
  public function show(teamMember $teamMember)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\teamMember  $teamMember
   * @return \Illuminate\Http\Response
   */
  public function edit(teamMember $teamMember)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\teamMember  $teamMember
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, teamMember $teamMember)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\teamMember  $teamMember
   * @return \Illuminate\Http\Response
   */
  public function destroy(teamMember $teamMember)
  {
    //
  }
}
