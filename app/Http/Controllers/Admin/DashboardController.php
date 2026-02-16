<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Major;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\CareerSubmission;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'stats' => [
                'news' => News::count(),
                'majors' => Major::count(),
                'testimonials' => Testimonial::count(),
                'applications' => CareerSubmission::count(),
                'users' => User::count(),
            ],
            'latestApplications' => CareerSubmission::latest()->take(5)->get(),
        ]);
    }
}
