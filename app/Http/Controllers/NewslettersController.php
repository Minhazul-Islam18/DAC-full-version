<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class NewslettersController extends Controller
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
        return view('content.user_management.newsletters', compact('countryData'));
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
     * @param  \App\Models\Newsletters  $newsletters
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletters $newsletters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletters  $newsletters
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletters $newsletters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletters  $newsletters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletters $newsletters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletters  $newsletters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletters $newsletters)
    {
        //
    }
}
