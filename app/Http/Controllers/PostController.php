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
        // dd($request->all());

        $data = [
            'author_id' => $request->input('author_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'published' => $request->input('published'),
        ];
        dd(Post::create($data));
    }
}
