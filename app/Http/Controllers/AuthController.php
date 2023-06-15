<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * ログインページを表示
     *
     * @return void
     */
    public function create() {
        return inertia('auth/Login');
    }

    /**
     * ログイン
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        // validation失敗時
        if (!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => '認証に失敗しました'
            ]);
        }

        $request->session()->regenerate();

        // 直前のURLにリダイレクト
        return redirect()->intended()
            ->with('success', 'ログインしました');
    }

    /**
     * ログアウト
     *
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'ログアウトしました');
    }
}