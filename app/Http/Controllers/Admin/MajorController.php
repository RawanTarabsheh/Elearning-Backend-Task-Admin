<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Major;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::query()->orderByDesc('id')->paginate(10);
        return view('admin.majors.index', compact('majors'));
    }

    public function create()
    {
        return view('admin.majors.create');
    }

    public function store(StoreMajorRequest $request)
    {
        Major::create($request->validated());

        return redirect()
            ->route('admin.majors.index')
            ->with('success', 'Major created successfully.');
    }

    public function edit(Major $major)
    {
        return view('admin.majors.edit', compact('major'));
    }

    public function update(UpdateMajorRequest $request, Major $major)
    {
        $major->update($request->validated());

        return redirect()
            ->route('admin.majors.index')
            ->with('success', 'Major updated successfully.');
    }

    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()
            ->route('admin.majors.index')
            ->with('success', 'Major deleted successfully.');
    }
}
