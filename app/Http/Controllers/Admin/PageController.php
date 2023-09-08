<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PageController extends Controller
{
    public function index()
    {
        $items = Page::select('id', 'title', 'slug', 'menu_id','menu_order', 'created_at')
            ->with('menu:id,url,title')
            ->orderBy('id', 'desc')->paginate(15);

        return view('admin.pages.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.create', [
           'menus' => Menu::getParentsForList()
        ]);
    }


    public function store(PageStoreRequest $request)
    {
        $page = new Page();
        foreach ($page->translatable as $property) {
            $page->setTranslation($property, config('app.defaultLocale', 'uz'), $request->post($property));
        }
        $page->header_img = $this->uploadImage($request->file('image'));
        $page->slug = $request->slug;
        $page->menu_id = $request->menu_id;
        $page->menu_order = $request->menu_order;

        $page->save();

        return redirect()->route('admin.pages.edit', $page->id)
            ->with('success', "Muvaffaqiyatli yaratildi!");
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'menus' => Menu::getParentsForList(),
            'item' => $page
        ]);
    }

    public function update(PageUpdateRequest $request, Page $page)
    {
        if ($request->lang) {
            foreach ($request->lang as $locale => $data) {
                $this->setTranslations($page, $locale, $data);
            }
        } else {
            $page->header_img = $this->uploadImage($request->file('image')) ?? $page->header_img;
            $page->slug = $request->post('slug');
            $page->menu_id = $request->post('menu_id');
            $page->menu_order = $request->post('menu_order');
        }

        $page->save();
        return redirect()->back()->with('success', 'Muvaffaqiyatli saqlandi');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }

    private function uploadImage(?UploadedFile $img): ?string
    {
        $path = null;
        if ($img) {
            $filename = \Str::random(8). '.'. $img->getClientOriginalExtension();
            $img->move(public_path(Page::BASE_IMAGE_PATH), $filename);
            $path = Page::BASE_IMAGE_PATH .DIRECTORY_SEPARATOR. $filename;
        }

        return $path;
    }

}
