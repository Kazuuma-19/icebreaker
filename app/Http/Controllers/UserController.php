<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return inertia('users/Register');
    }
    
    public function store(Request $request) {
        $user = User::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]));
        
        Auth::login($user);

        return redirect()->route('top')
            ->with('success', '登録が完了しました');
    }
}