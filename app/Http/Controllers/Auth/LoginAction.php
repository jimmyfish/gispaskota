<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAction extends Controller
{
    public function do(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|min:1',
            'password' => 'required|string'
        ]);

        $credentials = $request->only(['username', 'password']);

        if(!Auth::attempt($credentials)) {
            return redirect()->route('auth.login');
        }

        return redirect()->route('dashboard.main');
    }
}
