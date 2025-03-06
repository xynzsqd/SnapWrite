<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::query()->with('user')->orderBy('created_at', 'desc')->get();
        return view('feed', compact('posts'));
    }
}
