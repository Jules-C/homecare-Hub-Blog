<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostPatchController extends Controller
{
    public function __invoke(Request $request, Post $post)
    {
        $this->validate($request, ['title' => 'required', 'image_path' => 'nullable', 'author_name' => 'nullable', 'body' => 'nullable']);
        // $this->validate($request, [

        //     'slug' => 'required|string|unique:posts,slug,' . $post->id,

        // ]);
        $post->update($request->only('title', 'author_name', 'body', 'image_path', 'updated_at', 'slug'));
    }

    // $this->validate($request, [

    //     'slug' => 'required|string|unique:posts,slug,' . $post->id,

    // ]);

    //$post->update($request->only('title', 'teaser', 'body', 'published', 'slug'));
//}
}
