<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }

    public function post_show(Post $post)
    {
        return view("posts.view_single", compact("post"));
    }

    public function post_edit(Post $post)
    {
        return view("posts.edit", compact("post"));
    }

    public function post_update(Post $post)
    {
        $data = Request()->validate([
            "title" => "string",
            "content" => "string",
            "author" => "string",
            "img" => "mimes:jpeg,jpg",
        ]);

        if (Request()->hasFile("img")) {
            $data["img"] = Request()
                ->file("img")
                ->store("uploads", "public");
        } else {
            unset($data["img"]);
        }

        $post->update($data);
        return redirect()->route("post_show", $post->id);
    }

    public function post_create()
    {
        return view("posts.new");
    }

    public function post_delete(Post $post)
    {
        $post->delete();
        return redirect()->route("posts");
    }
    public function post_store()
    {
        $data = Request()->validate([
            "title" => "string",
            "content" => "string",
            "author" => "string",
            "img" => "mimes:jpeg,jpg",
        ]);
        if (Request()->hasFile("img")) {
            $data["img"] = Request()
                ->file("img")
                ->store("uploads", "public");
        } else {
            unset($data["img"]);
        }
        $post = Post::create($data);
        return redirect()->route("post_show", $post->id);
    }
}
