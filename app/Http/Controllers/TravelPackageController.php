<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;


class TravelPackageController extends Controller
{
    //
    public function index()
    {
        $travelpackages = TravelPackage::all();

        return view('travel-package.index', compact('travelpackages'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TravelPackage  $travelpackage
     * @return \Illuminate\Http\Response
     */
    public function show(TravelPackage $travelpackage)
    {
        //
        return view('travel-package.show', compact('travelpackage'));
    }
}