<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $posts = PostResource::collection($posts)->resolve();
        return Inertia('Posts/Index', compact('posts'));
    }

    public function create()
    {
        return Inertia('Posts/Create');
    }

    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('post.index');
    }

    public function detail(Post $post)
    {
        return Inertia('Posts/Detail', compact('post'));
    }
}
