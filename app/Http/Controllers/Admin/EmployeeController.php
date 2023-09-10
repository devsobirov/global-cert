<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class EmployeeController extends Controller
{

    public function index()
    {
        $items = Employee::orderBy('order')->paginate(15);
        return view('admin.employees.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|array',
            'position' => 'required|array',
            'image' => 'required|image',
            'order' => 'required|numeric',
            'email' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'status' => 'nullable|boolean'
        ]);
        $data['image'] = $this->uploadImage($request->file('image'));
        $employee = Employee::create($data);
        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name' => 'required|array',
            'position' => 'required|array',
            'image' => 'nullable|image',
            'order' => 'required|numeric',
            'email' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'status' => 'nullable|boolean'
        ]);
        $data['image'] = $this->uploadImage($request->file('image')) ?? $employee->image;
        $employee->update($data);

        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }

    private function uploadImage(?UploadedFile $img): ?string
    {
        $path = null;
        if ($img) {
            $filename = \Str::random(8). '.'. $img->getClientOriginalExtension();
            $img->move(public_path(Employee::BASE_IMAGE_PATH), $filename);
            $path = Employee::BASE_IMAGE_PATH .DIRECTORY_SEPARATOR. $filename;
        }

        return $path;
    }
}
