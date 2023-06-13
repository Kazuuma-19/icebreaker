<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {
        return inertia('Index');
    }
    
    // ユーザーのお題を取得
    public function getTopics() {
        $topics = Topic::query()
            ->inRandomOrder()
            ->first();

        return $topics;
    }

    // 全てのお題を取得
    public function getAllTopics() {
        $user = Auth::user();
        
        $topics = Topic::query()
            ->where('user_id', $user->id)
            ->inRandomOrder()
            ->first();

        return $topics;
    }
}