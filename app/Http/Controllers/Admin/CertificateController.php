<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $items = Certificate::search($request->search)->byStatus($request->status)->orderBy('id', 'desc')->paginate(15);
        return view('admin.certificates.index', compact('items'));
    }

    public function store(Request $request)
    {
        Certificate::create($request->validate([
            'number' => 'required|string|unique:certificates,number',
            'issue_date' => 'required|date:Y-m-d',
            'expiry_date' => 'required|date:Y-m-d',
            'address' => 'nullable|string|max:255',
            'accreditation' => 'nullable|string|max:255',
            'scope_of_work' => 'nullable|string|max:255',
            'standard' => 'nullable|string|max:255',
        ]));

        return redirect()->back()->with('success', "Successfully saved");
    }

    public function update(Request $request, Certificate $certificate)
    {
        $certificate->update($request->validate([
            'number' => 'required|string|unique:certificates,number,'.$certificate->id,
            'issue_date' => 'required|date:Y-m-d',
            'expiry_date' => 'required|date:Y-m-d',
            'address' => 'nullable|string|max:255',
            'accreditation' => 'nullable|string|max:255',
            'scope_of_work' => 'nullable|string|max:255',
            'standard' => 'nullable|string|max:255',
        ]));

        return redirect()->back()->with('success', "Successfully saved");
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
    }
}
