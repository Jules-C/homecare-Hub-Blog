<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentsResource;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CommentsResource::collection(Comments::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comments = Comments::create($request);

        return new CommentsResource($comments);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(Comments $comments)
    {return CommentsResource::collection(Comments::all());
        //return new CommentsResource($comments);
    }
    public function createComment(Request $request)
    {
        $comments = new Comments;
        $comments->post_id = $request->post_id;
        $comments->text = $request->text;
        $comments->save();
        // return response()->json([
        //     'message' => 'New post created',
        // ]);
        return new CommentsResource($comments);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        // $deleted = User::table('users')->delete();

        // $deleted = DB::table('users')->where('votes', '>', 100)->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comments)
    {
        $comments->delete();
    }
}
