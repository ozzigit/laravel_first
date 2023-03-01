<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile("img")) {
            $data["img"] = $request->file("img")->store("uploads", "public");
        } else {
            unset($data["img"]);
        }

        $post->update($data);
        return redirect()->route("post_show", $post->id);
    }
}
