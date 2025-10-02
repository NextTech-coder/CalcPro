<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Вывод шаблона регистрации.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Регистрация пользователя.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect()->intended();
    }
}
