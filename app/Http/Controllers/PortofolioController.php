<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function portofolio(){
        $regions = Region::all();
        return view('dashboard.portofolio', compact('regions'));
    }
}
