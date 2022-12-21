<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post');
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
}
