<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetDashboardAction extends Controller
{
    public function __invoke()
    {
        return view('dashboard.main');
    }
}
