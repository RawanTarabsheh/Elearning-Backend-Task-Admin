<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Major;

class MajorApiController extends Controller
{
    public function index()
    {
        $majors = Major::query()
            ->where('is_active', true)
            ->orderBy('name_en')
            ->get(['id', 'name_en', 'name_ar']);

        return response()->json([
            'data' => $majors,
        ]);
    }
}
