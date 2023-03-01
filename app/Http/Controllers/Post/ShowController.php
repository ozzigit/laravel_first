<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Request $request, Post $post)
    {
        return view("posts.view_single", compact("post"));
    }
}
