<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $items = Banner::orderBy('order', 'asc')->paginate(15);
        return view('admin.banners.index', compact('items'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', [
            'item' => $banner
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'intro' => 'nullable|string',
            'title' => 'required|string',
            'order' => 'numeric',
            'image' => 'required|image|max:3074'
        ]);

        $filename = \Str::random(8). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path(Banner::BASE_IMG_DIR), $filename);

        $banner = new Banner();
        $banner->setTranslation('intro', config('app.defaultLocale', 'uz'), $request->intro);
        $banner->setTranslation('title', config('app.defaultLocale', 'uz'), $request->title);
        $banner->setTranslation('btn_label', config('app.defaultLocale', 'uz'), $request->title);
        $banner->order = $request->order;
        $banner->image = Banner::BASE_IMG_DIR . DIRECTORY_SEPARATOR. $filename;
        $banner->is_external_link = !empty($request->is_external_link);
        $banner->btn_link = $request->btn_link;
        $banner->save();

        return redirect()->route('banners.edit', $banner->id)
            ->with('success', "Banner muvaffaqiyatli yaratildi");
    }

    public function update(Request $request, Banner $banner)
    {
        if ($request->general) {
            $request->validate([
                'order' => 'numeric',
                'image' => 'nullable|image|max:3074',
                'is_external_link' => 'nullable|boolean',
                'btn_link' => 'nullable|string|max:255'
            ]);

            if ($img = $request->file('image')) {
                $filename = \Str::random(8). '.'. $img->getClientOriginalExtension();
                $request->file('image')->move(public_path(Banner::BASE_IMG_DIR), $filename);
                $banner->image = Banner::BASE_IMG_DIR . DIRECTORY_SEPARATOR. $filename;
            }
            $banner->order = $request->order;
            $banner->is_external_link = !empty($request->is_external_link);
            $banner->btn_link = $request->btn_link;
        }

        if ($request->lang) {
            $request->validate([
                'lang.*.intro' => 'nullable|string',
                'lang.*.title' => 'required|string',
                'lang.*.btn_label' => 'nullable|string'
            ]);
            foreach ($request->lang as $locale => $data) {
                $banner = $this->setTranslations($banner, $locale, $data);
            }

            $banner->save();
        }

        $banner->save();
        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }
}
