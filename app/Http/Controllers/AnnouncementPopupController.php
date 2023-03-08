<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnnouncementPopup;
use PragmaRX\Countries\Package\Countries;

class AnnouncementPopupController extends Controller
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
        return view('content.popups.index', compact('countryData'));
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
     * @param  \App\Models\AnnouncementPopup  $announcementPopup
     * @return \Illuminate\Http\Response
     */
    public function show(AnnouncementPopup $announcementPopup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnouncementPopup  $announcementPopup
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnouncementPopup $announcementPopup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnouncementPopup  $announcementPopup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnouncementPopup $announcementPopup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnouncementPopup  $announcementPopup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnouncementPopup $announcementPopup)
    {
        //
    }
}
