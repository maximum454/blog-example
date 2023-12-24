<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Inertia('Posts/Index');
    }

    public function create()
    {
        return Inertia('Posts/Create');
    }

    public function store(StoreRequest $request)
    {
        Post::created($request->validate());
        return redirect()->route('post.index');
    }
}
