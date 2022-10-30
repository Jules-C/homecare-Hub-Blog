<?php

use App\Http\Controllers\Api\CommentsController;
use App\Http\Controllers\PostDestroyController;
use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostPatchController;
use App\Http\Controllers\PostStoreController;
use App\Http\Controllers\ShowPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get all posts
Route::get('/posts', [PostIndexController::class, '__invoke']);
//get post by slug
Route::get('/posts/{post:slug}', [ShowPostController::class, '__invoke']);

//create post
Route::post('/posts', [PostStoreController::class, '__invoke']);

//edit post
Route::patch('/posts/{post:id}', [PostPatchController::class, '__invoke']);

//destroy post
Route::delete('/posts/{post:id}', [PostDestroyController::class, '__invoke']);

//destroy comment
Route::delete('/comments/{comment:id}', [CommentsController::class, 'destroy']);

//comments routes
//Route::apiResource('comments', CommentsController::class);

Route::post('comments', [CommentsController::class, 'createComment']);

//get comment by post_id
Route::get('/comments/{comments:post_id}', [CommentsController::class, 'show']);
