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

        return view('TravelPackages', compact('travelpackages'));
    }
}