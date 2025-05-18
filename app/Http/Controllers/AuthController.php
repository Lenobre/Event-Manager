<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check())
            return redirect(route("dashboard.index"));

        return view("pages.login");
    }

    public function login(LoginRequest $request)
    {
        $payload = $request->validated();

        if (!Auth::attempt($payload))
            return response()->json([
                "message" => "Email ou senha inválidos"
            ], 401);

        request()->session()->regenerate();
        return response()->json([
            "message" => "Login realizado com sucesso",
            "redirect" => route("dashboard.index")
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
