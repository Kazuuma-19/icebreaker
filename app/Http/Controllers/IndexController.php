<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * トップページを表示
     *
     * @return void
     */
    public function index() {
        return inertia('TopIndex');
    }
    
    /**
     * 全てのお題を取得
     *
     * @return void
     */
    public function getAllTopics() {
        $topics = Topic::query()
            ->inRandomOrder()
            ->first();

        return $topics;
    }

    /**
     * ユーザーのお題を取得
     *
     * @return void
     */
    public function getUserTopics() {
        $user = Auth::user();
        
        $topics = Topic::query()
            ->where('user_id', $user->id)
            ->inRandomOrder()
            ->first();

        return $topics;
    }
}