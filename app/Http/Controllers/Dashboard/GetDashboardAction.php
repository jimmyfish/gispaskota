<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GetDashboardAction extends Controller
{
    public function index()
    {
        return view('dashboard.main');
    }
}
