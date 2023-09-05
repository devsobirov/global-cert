<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::orderBy('id', 'desc')->paginate(15);
        return view('admin.posts.index', compact('items'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'item' => $post
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|max:3074'
        ]);

        $filename = \Str::random(8). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('assets/images/posts'), $filename);

        $post = new Post();
        $post->setTranslation('title', config('app.defaultLocale', 'uz'), $request->title);
        $post->setTranslation('content', config('app.defaultLocale', 'uz'), $request->post('content'));
        $post->image = 'assets/images/posts/'.$filename;
        $post->save();

        return redirect()->route('posts.edit', $post->id)
            ->with('success', "Muvaffaqiyatli yaratildi");
    }

    public function update(Request $request, Post $post)
    {
        if ($img = $request->image) {
            $request->validate([
                'image' => 'nullable|image|max:3074'
            ]);
            $filename = \Str::random(8). '.'. $img->getClientOriginalExtension();
            $request->file('image')->move(public_path('assets/images/posts'), $filename);
            $post->image = 'assets/images/posts/'.$filename;
        }

        if ($request->lang) {
            $request->validate([
                'lang.*.title' => 'required|string',
                'lang.*.content' => 'required|string',
            ]);
            foreach ($request->lang as $locale => $data) {
                $post = $this->setTranslations($post, $locale, $data);
            }

            $post->save();
        }

        $post->save();
        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }
}
