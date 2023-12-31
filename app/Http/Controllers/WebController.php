<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Block;
use App\Models\Certificate;
use App\Models\Employee;
use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function homepage()
    {
        $banners = Banner::select(['id', 'intro', 'title', 'image', 'order', 'btn_link', 'btn_label'])->orderBy('order', 'asc')->limit(6)->get();
        $blocks = Block::where('status', true)->orderBy('order')->get();
        $projects = Project::orderBy('order')->limit(6)->get();
        $team = Employee::orderBy('order')->get();
        $posts = Post::select(['id', 'title', 'image', 'views','created_at'])->orderBy('id', 'desc')->limit(6)->get();

        return view('homepage', compact('banners',  'blocks', 'projects', 'team', 'posts'));
    }

    public function page(Page $page)
    {
        $latestPosts = Post::select(['id', 'title', 'image', 'views', 'created_at'])->orderBy('id', 'desc')->limit(6)->get();;
        return view('page', compact('page', 'latestPosts'));
    }


    public function certificate(Request $request)
    {
        $code = null;
        $certificate = null;
        $attempted = !!$request->post('attempted');

        if ($attempted) {
            $request->validate(['certificate' => 'required|string']);
            $code = $request->post('certificate');
            $certificate = Certificate::where('number', $code)->first();
        }

        return view('certificate', compact('code', 'certificate', 'attempted'));
    }

    public function portfolio()
    {
        $items = Project::orderBy('id', 'desc')->paginate(20);
        return view('portfolio', compact('items'));
    }
}
