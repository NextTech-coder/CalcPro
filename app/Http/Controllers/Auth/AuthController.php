<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(AuthRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended();
    }
}
