<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\AcademicLevel;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::query()
            ->with('academicLevel')
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $levels = AcademicLevel::query()->where('is_active', true)->orderBy('name_en')->get();
        return view('admin.students.create', compact('levels'));
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());

        return redirect()
            ->route('admin.students.index')
            ->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        $levels = AcademicLevel::query()->where('is_active', true)->orderBy('name_en')->get();
        return view('admin.students.edit', compact('student', 'levels'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect()
            ->route('admin.students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('admin.students.index')
            ->with('success', 'Student deleted successfully.');
    }
}
