<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    public function __construct()
    {
        Cache::forget(Setting::CACHE_KEY);
    }

    public function index()
    {
        return view('admin.settings', [
            'item' => Setting::getSettings()
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->all();
        $settings = Setting::getSettings();

        foreach ($fields as $field => $value) {
            if (in_array($field, $settings->files)) {
                $settings->$field = $this->uploadFile($field, $value) ?? $settings->$field;
            } elseif (in_array($field, $settings->getFillable())) {
                $settings->$field = $value;
            }
        }

        $settings->save();

        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    protected function uploadFile(string $field, ?UploadedFile $file): ?string
    {
        $filename = null;
        if ($file) {
            $filename = $field.'.'.$file->getClientOriginalExtension();
            $file->move(public_path(), $filename);
        }
        return $filename;
    }
}
