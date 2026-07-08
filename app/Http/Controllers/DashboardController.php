<?php

namespace App\Http\Controllers;

use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(2)->get();
        return view('dashboard', compact('posts'));
    }
}
