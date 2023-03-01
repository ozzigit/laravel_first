<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {

        $posts = Post::paginate(10);
        // $posts = Post::all();
        return view("posts.index", compact("posts"));
    }
}
