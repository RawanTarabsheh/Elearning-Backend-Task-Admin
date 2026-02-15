<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAcademicLevelRequest;
use App\Http\Requests\UpdateAcademicLevelRequest;
use App\Models\AcademicLevel;

class AcademicLevelController extends Controller
{
    public function index()
    {
        $levels = AcademicLevel::query()
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin.academic-levels.index', compact('levels'));
    }

    public function create()
    {
        return view('admin.academic-levels.create');
    }

    public function store(StoreAcademicLevelRequest $request)
    {
        AcademicLevel::create($request->validated());

        return redirect()
            ->route('admin.academic-levels.index')
            ->with('success', 'Academic level created successfully.');
    }

    public function edit(AcademicLevel $academicLevel)
    {
        return view('admin.academic-levels.edit', compact('academicLevel'));
    }

    public function update(UpdateAcademicLevelRequest $request, AcademicLevel $academicLevel)
    {
        $academicLevel->update($request->validated());

        return redirect()
            ->route('admin.academic-levels.index')
            ->with('success', 'Academic level updated successfully.');
    }

    public function destroy(AcademicLevel $academicLevel)
    {
        $academicLevel->delete();

        return redirect()
            ->route('admin.academic-levels.index')
            ->with('success', 'Academic level deleted successfully.');
    }
}
