<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class DropLocationAction extends Controller
{
    public function do(Request $request, $id)
    {
        if (!is_numeric($id)) return redirect()->route('dashboard.location');

        $data = Location::find($id);

        if (!$data) return redirect()->route('dashboard.location');

        $data->delete();

        return redirect()->route('dashboard.location', ['message' => 'Successfully deleted!']);
    }
}
