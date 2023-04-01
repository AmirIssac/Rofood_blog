<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //

    public function index(){
        $packages = Package::with('feature')->get();
        return view('guest.prices',['packages' => $packages]);
    }
}
