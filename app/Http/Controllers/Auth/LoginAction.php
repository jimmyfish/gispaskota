<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAction extends Controller
{
    public function do(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|min:1',
            'password' => 'required|string'
        ]);

        
    }
}
