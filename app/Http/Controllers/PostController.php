<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'author_id' => 'required|integer',
            'title' => 'required|max:250',
            'description' => 'required|max:200000',
            'slug' => 'required|max:200',
            'published' => 'required|date'
        ]);

        Post::create($data);

        return back()->with("message", "Post has been saved");
    }

    public function edit(Post $post)
    {
        $post['published'] = Carbon::parse($post['published'])->format('Y-m-d');
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'author_id' => 'required|integer',
            'title' => 'required|max:250',
            'description' => 'required|max:200000',
            'slug' => 'required|max:200',
            'published' => 'required|date'
        ]);

        $post->update($data);
        return back()->with("message", "Post has been updated");
    }
}
