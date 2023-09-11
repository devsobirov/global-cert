<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $paginated = Post::select(['id', 'title', 'image', 'views', 'created_at'])
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('blog-list', compact('paginated'));
    }

    public function show(Post $post)
    {
        $post->increment('views');
        $latestPosts = Post::select(['id', 'title', 'image', 'views', 'created_at'])
            ->whereNot('id', $post->id)
            ->orderBy('id', 'desc')->limit(8)->get();
        return view('blog-post', compact('post', 'latestPosts'));
    }
}
