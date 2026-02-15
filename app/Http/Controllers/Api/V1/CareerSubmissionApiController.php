<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareerSubmissionRequest;
use App\Models\CareerSubmission;
use Illuminate\Support\Str;

class CareerSubmissionApiController extends Controller
{
    public function store(StoreCareerSubmissionRequest $request)
    {
        $file = $request->file('cv');

        $safeName = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('career-cvs', $safeName, 'public');

        $submission = CareerSubmission::create([
            'job' => $request->job,
            'years_of_experience' => $request->years_of_experience,
            'major_id' => $request->major_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'cv_path' => $path,
            'cv_original_name' => $file->getClientOriginalName(),
        ]);

        return response()->json([
            'message' => 'Application submitted successfully.',
            'data' => [
                'id' => $submission->id,
            ],
        ], 201);
    }
}
