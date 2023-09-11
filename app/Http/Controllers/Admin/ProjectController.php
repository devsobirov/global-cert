<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProjectController extends Controller
{
    public function index()
    {
        $items = Project::orderBy('order')->paginate(15);
        return view('admin.projects.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'order' => 'required|numeric'
        ]);
        $data['image'] = $this->uploadImage($request->file('image'));

        $project = Project::create($data);
        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'order' => 'required|numeric'
        ]);
        $data['image'] = $this->uploadImage($request->file('image')) ?? $project->image;

        $project->update($data);
        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }

    private function uploadImage(?UploadedFile $img): ?string
    {
        $path = null;
        if ($img) {
            $filename = \Str::random(8). '.'. $img->getClientOriginalExtension();
            $img->move(public_path(Project::BASE_IMAGE_PATH), $filename);
            $path = Project::BASE_IMAGE_PATH .DIRECTORY_SEPARATOR. $filename;
        }

        return $path;
    }
}
