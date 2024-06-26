<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        // データの保存
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // 投稿一覧ページにリダイレクト
        return redirect('/posts');
    }

    // 投稿一覧を表示するメソッド
    public function index()
    {
        // 全ての投稿を取得
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
}
