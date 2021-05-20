<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class ShowLocationAction extends Controller
{
    public function show(Request $request)
    {
        $data = Location::all();
        
        return view('location.list');
    }
}
