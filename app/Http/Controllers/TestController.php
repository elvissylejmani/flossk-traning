<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {

        $names = [
            "hello",
            "world"
        ];

        return view('welcome', ['names' => $names]);
    }
}
