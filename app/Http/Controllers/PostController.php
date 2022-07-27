<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/posts",
     *      operationId="getAllPosts",
     *      tags={"Post"},
     *      security={{"bearerAuth":{}}},
     *      summary="取得全部文章",
     *      description="取得全部文章",
     *      @OA\Response(
     *          response=200,
     *          description="請求成功"
     *      )
     * )
     */
    public function index()
    {
        return Post::paginate(request()->get('page', 10));
    }

    /**
     * @OA\Post(
     *      path="/api/posts",
     *      operationId="createPost",
     *      tags={"Post"},
     *      summary="建立文章",
     *      description="建立文章",
     *      security={{"bearerAuth":{}}},
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="content",
     *                     type="string"
     *                 ),
     *                 example={"title": "HelloWorld", "content": "HelloWolrd content"}
     *             )
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="請求成功"
     *      )
     * )
     */
    public function store(StorePostRequest $request)
    {
        $params = $request->validated();
        $params['author'] = auth()->user()->id;

        $post = Post::create($params);
        return response()->json(['id' => $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

/**
 * @OA\Schema(
 *  schema="Result",
 *  title="Result",
 * 	@OA\Property(
 * 		property="status",
 * 		type="string"
 * 	),
 * 	@OA\Property(
 * 		property="error",
 * 		type="string"
 * 	)
 * )
 */
