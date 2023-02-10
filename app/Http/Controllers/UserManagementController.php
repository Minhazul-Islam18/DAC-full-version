<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userManagement;
use PragmaRX\Countries\Package\Services\Countries;

class UserManagementController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  public function userList()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.list', compact('countryData'));
  }
  public function PoList()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po', compact('countryData'));
  }
  public function userView()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.view', compact('countryData'));
  }
  public function poView()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po_account', compact('countryData'));
  }
  public function userViewSec()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.security', compact('countryData'));
  }
  public function poViewSec()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po_security', compact('countryData'));
  }
  public function userViewWallet()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.wallet', compact('countryData'));
  }
  public function poViewWallet()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po_wallet', compact('countryData'));
  }
  public function userViewNotifications()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.notification', compact('countryData'));
  }
  public function poViewNotifications()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po_notification', compact('countryData'));
  }
  public function userViewConnections()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.connections', compact('countryData'));
  }
  public function poViewConnections()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po_connections', compact('countryData'));
  }
  public function userViewStatistics()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.statistics', compact('countryData'));
  }
  public function poViewStatistics()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.statistics', compact('countryData'));
  }
  public function poViewEarnings()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.user_management.po_earnings', compact('countryData'));
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
   * @param  \App\Models\userManagement  $userManagement
   * @return \Illuminate\Http\Response
   */
  public function show(userManagement $userManagement)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\userManagement  $userManagement
   * @return \Illuminate\Http\Response
   */
  public function edit(userManagement $userManagement)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\userManagement  $userManagement
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, userManagement $userManagement)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\userManagement  $userManagement
   * @return \Illuminate\Http\Response
   */
  public function destroy(userManagement $userManagement)
  {
    //
  }
}
