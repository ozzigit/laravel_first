<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile("img")) {
            $data["img"] = $request->file("img")->store("uploads", "public");
        } else {
            unset($data["img"]);
        }
        $post = Post::create($data);
        return redirect()->route("post_show", $post->id);
    }
}
