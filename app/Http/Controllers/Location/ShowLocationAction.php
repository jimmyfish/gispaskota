<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class ShowLocationAction extends Controller
{
    public function show(Request $request)
    {
        $locations = Location::all();

        $locations->each(function ($location) {
            $location->geolocation = json_decode($location->geolocation);
            $location->price_range = json_decode($location->price_range);
            $location->operation_hours = json_decode($location->operation_hours);
        });
        
        return view('location.list', ['locations' => $locations]);
    }
}
