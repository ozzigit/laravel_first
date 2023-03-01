<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Post $post)
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
}
