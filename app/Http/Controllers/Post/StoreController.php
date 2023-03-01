<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke(Request $request)
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
