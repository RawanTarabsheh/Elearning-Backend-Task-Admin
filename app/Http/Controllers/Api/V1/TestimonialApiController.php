<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialApiController extends Controller
{
    public function index()
    {
        $items = Testimonial::query()
            ->where('is_active', true)
            ->orderByDesc('id')
            ->limit(10)
            ->get(['id','name_en','name_ar','title_en','title_ar','content_en','content_ar']);

        return response()->json(['data' => $items]);
    }
}
