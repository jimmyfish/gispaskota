<?php

namespace App\Http\Controllers\Location;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditLocationAction extends Controller
{
    public function put(Request $request, $id)
    {
        if (!is_numeric($id)) return redirect()->route('dashboard.location');

        $original = Location::find($id);

        if (!$original) return redirect()->route('dashboard.location');

        $data = $request->only([
            'title',
            'address',
            'description',
            'operation_hours',
            'price_range',
            'geolocation',
            'category_id',
        ]);

        foreach ($data as $key => $datum) {
            $original->{$key} = $datum;
        }

        $original->save();

        return redirect()->route('dashboard.location', ['message' => 'Data successfully updated!']);
    }
}
