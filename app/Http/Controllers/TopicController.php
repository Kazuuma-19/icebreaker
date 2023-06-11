<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TopicController extends Controller
{
    public function index() {
        $user = Auth::user();
        
        $topics = Topic::query()
            ->where('user_id', $user->id)
            ->get();

        return Inertia::render('Index', [
            'topics' => $topics
        ]);
    }
    // public function show() {
    //     return @inertia('Show');
    // }
}