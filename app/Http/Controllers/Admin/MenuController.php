<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $items = Menu::orderBy('order')
            ->with('parent:id,title','page:id,title')
            ->paginate(15);

        return view('admin.menu.index', compact('items'));
    }

    public function create()
    {
        return view('admin.menu.create', [
            'parents' => Menu::getParentsForList()
        ]);
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', [
            'parents' => Menu::getParentsForList(),
            'item' => $menu
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->getValidatedData($request);
        $request->validate(['title' => 'required|string|max:255']);

        $menu = new Menu($data);
        $menu->setTranslation('title', config('app.defaultLocale'), $request->title);
        $menu->save();

        return redirect()->route('menu.edit', $menu->id)
            ->with("Menu linki muvaffaqiyatli yaratildi");
    }

    public function update(Request $request, Menu $menu)
    {
        $data = $this->getValidatedData($request);
        $request->validate(['lang' => 'array']);

        $menu->update($data);
        foreach ($request->lang as $locale => $data) {
            $menu = $this->setTranslations($menu, $locale, $data);
        }
        $menu->save();

        return redirect()->back()->with("Muvaffaqiyatli saqlandi");
    }

    public function destroy(Menu $menu)
    {
        DB::table('menus')->where('parent_id', $menu->id)
            ->update(['parent_id' => null]);

        $menu->delete();
        return redirect()->back()->with("Muvaffaqiyatli o'chirildi");
    }

    protected function getValidatedData(Request $request)
    {
        $data = $request->validate([
            'url'   => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'show_in_footer' => 'nullable|boolean',
            'order' => 'integer'
        ]);

        $data['show_in_footer'] = $data['show_in_footer'] ?? false;
        return $data;
    }
}
