<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        return Post::latest()->get();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|min:3|max:255',
            'content' => 'nullable|min:3',
        ]);

        $post = Post::create($data);

        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title'   => 'sometimes|required|min:3|max:255',
            'content' => 'nullable|min:3',
        ]);

        $post->update($data);

        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }
}
