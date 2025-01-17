<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Вывод шаблона для авторизации
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Авторизация пользователя
     */
    public function store(AuthRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended();
    }
}
