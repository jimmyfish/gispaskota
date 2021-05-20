<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateLocationAction extends Controller
{
    public function form()
    {
        return view('location.form', ['title' => "Create Location"]);
    }

    public function store(Request $request)
    {
        $data = new Location([
            'title' => $request->get('title'),
            'address' => $request->get('address'),
            'description' => $request->get('description'),
            'operation_hours' => json_encode($request->get('operation_hours')),
            'price_range' => json_encode($request->get('price_range')),
            'geolocation' => json_encode($request->get('geolocation')),
            'user_id' => Auth::user()->id,
            'category_id' => (int) $request->get('category_id')
        ]);

        $data->save();

        return redirect()->route('dashboard.location', ['message' => "Data was successfuly saved"]);
    }
}
