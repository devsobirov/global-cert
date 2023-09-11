<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Message;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Certificate::limit(10)->get();

        return view('admin.home', [
            'items' => $items,
            'certificates' => Certificate::count(),
            'posts' => Post::count(),
            'pages' => Page::count(),
            'users' => User::count()
        ]);
    }

    public function messages()
    {
        $items = Message::orderBy('id', 'desc')->paginate(15);
        return view('admin.messages.index', compact('items'));
    }
}
