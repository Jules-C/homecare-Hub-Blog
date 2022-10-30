<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public static function booted()
    // {
    //     static::creating(function (Post $post) {
    //         if (!$post->slug) {
    //             $post->slug = $post->id;
    //         }
    //     });
    // }
    protected $table = 'posts';
    protected $fillable = [

        'title',
        'body',
        'image_path',
        'author_name',
        'slug',
    ];
}
