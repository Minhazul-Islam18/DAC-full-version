<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Services\Countries;

class InvoiceController extends Controller
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
    return view('content.invoice.invoice-list', compact('countryData'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.invoice.invoice-add', compact('countryData'));
  }
  public function preview()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.invoice.invoice-preview', compact('countryData'));
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
   * @param  \App\Models\invoice  $invoice
   * @return \Illuminate\Http\Response
   */
  public function show(invoice $invoice)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\invoice  $invoice
   * @return \Illuminate\Http\Response
   */
  public function edit(invoice $invoice)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\invoice  $invoice
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, invoice $invoice)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\invoice  $invoice
   * @return \Illuminate\Http\Response
   */
  public function destroy(invoice $invoice)
  {
    //
  }
}
