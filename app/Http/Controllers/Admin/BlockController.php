<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlockController extends Controller
{
    public function show(string $id)
    {
        $items = Block::where('type', $id)->orderBy('order')->paginate(15);
        return view('admin.blocks.index', [
            'items' => $items,
            'type' => $id
        ]);
    }

    public function store(Request $request)
    {
        $block = new Block($request->validate([
            'type' => ['required', Rule::in(Block::$types)],
            'icon' => 'nullable|string',
            'url' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
            'order' => 'numeric',
        ]));

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        $block->setTranslation('title', config('app.defaultLocale'), $request->post('title'));
        $block->setTranslation('description', config('app.defaultLocale'), $request->post('description'));

        $block->save();

        return redirect()->route('blocks.edit', ['block' => $block->id])
            ->with('success', "Muvaffaqiyatli yaratildi");
    }

    public function edit(Block $block)
    {
        return view('admin.blocks.edit', [
            'item' => $block
        ]);
    }

    public function update(Request $request, Block $block)
    {
        if ($request->lang) {
            foreach ($request->lang as $locale => $data) {
                $block = $this->setTranslations($block, $locale, $data);
            }
            $block->save();
        } else {
            $block->update($request->validate([
                'icon' => 'nullable|string',
                'url' => 'nullable|string|max:255',
                'status' => 'nullable|boolean',
                'order' => 'numeric',
            ]));
        }

        return redirect()->back()->with('success', "Muvaffaqiyatli yaratildi");
    }

    public function destroy(Block $block)
    {
        $block->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }
}
