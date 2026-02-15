<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerSubmission;
use Illuminate\Support\Facades\Storage;

class CareerSubmissionController extends Controller
{
    public function index()
    {
        $submissions = CareerSubmission::query()
            ->with('major')
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin.career-submissions.index', compact('submissions'));
    }

    public function downloadCv(CareerSubmission $careerSubmission)
    {
        if (!Storage::disk('public')->exists($careerSubmission->cv_path)) {
            abort(404, 'CV file not found.');
        }

        $downloadName = $careerSubmission->cv_original_name
            ?: basename($careerSubmission->cv_path);

        return Storage::disk('public')->download($careerSubmission->cv_path, $downloadName);
    }
}
