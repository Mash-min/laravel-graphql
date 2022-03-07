<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json(['post' => $post]);
    }
}
