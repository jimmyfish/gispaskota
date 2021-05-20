<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutAction extends Controller
{
    public function do()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
