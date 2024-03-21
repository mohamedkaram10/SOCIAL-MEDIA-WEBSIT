<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    /**
     * __invoke
     *
     * @param  mixed $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $posts = Post::query()->latest()->paginate();

        return Inertia::render('Home', [
            'posts' => PostResource::collection($posts),
        ]);
    }
}
