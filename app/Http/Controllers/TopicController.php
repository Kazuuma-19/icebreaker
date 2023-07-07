<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TopicController extends Controller
{
    /**
     * お題管理ページを表示
     *
     * @return void
     */
    public function index() {
        $user = Auth::user();
        
        $topics = Topic::query()
            ->where('user_id', $user->id)
            ->get();

        return Inertia::render('topics/TopicIndex', [
            'topics' => $topics,
        ]);
    }

    /**
     * お題を追加
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        $user = Auth::user();

        $topics = new Topic();
        $topics->user_id = $user->id;
        $topics->topic = $request->input('topic');
        $topics->category = $request->input('category');
        $topics->public = $request->input('public');
        $topics->save();

        return redirect()->route('topics.index')
            ->with('success', '追加しました');
    }

    /**
     * お題を編集
     *
     * @param Request $request
     * @param Topic $topic
     * @return void
     */
    public function update(Request $request, Topic $topic) {
        $topic->topic = $request->topic;
        $topic->category = $request->category;
        $topic->public = $request->public;
        $topic->save();

        return redirect()->route('topics.index')
            ->with('success', '更新しました');
    }
    
    /**
     * お題を削除
     *
     * @param Topic $topics
     * @return void
     */
    public function destroy(Topic $topic) {
        $topic->delete();

        return redirect()->route('topics.index')
            ->with('success', '削除しました');
    }
}