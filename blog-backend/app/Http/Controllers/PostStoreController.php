<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostStoreController extends Controller
{
    //In theory this should require auth, here

    public function __invoke()
    {
        $post = Post::create([
            'title' => "Untitled Post",
            'image_path' => "",
            'author_name' => "",
            'slug' => rand(), //sorry should have made a UUID
        ]);

        return new PostResource($post);
    }
}
