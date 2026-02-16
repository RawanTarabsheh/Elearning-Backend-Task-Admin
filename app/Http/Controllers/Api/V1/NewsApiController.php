<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsApiController extends Controller
{
    public function index()
    {
        $items = News::query()
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->limit(10)
            ->get(['id','title_en','title_ar','content_en','content_ar','image_path','published_at']);

        return response()->json(['data' => $items]);
    }
}
