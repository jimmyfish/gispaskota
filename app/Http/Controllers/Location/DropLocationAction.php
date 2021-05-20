<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DropLocationAction extends Controller
{
    public function do(Request $request, $id)
    {
        if (!is_numeric($id)) return redirect()->route('dashboard.location');
    }
}
