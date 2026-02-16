<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::insert([
            [
                'title_ar' => 'طلب المساعدة عبر تطبيق الواتساب',
                'content_ar' => 'الاتصال الهاتفي يمكن أن يسهل عليك الحصول على المساعدة التي تحتاجها في اختيار مدرس خصوصي.',
                 'title_en' => 'Test Title',
                'content_en' => 'Test Desc',
                'image_path' => 'assets/images/news1.png',
                'published_at' => '2025-10-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'title_ar' => 'طلب المساعدة عبر تطبيق الواتساب',
                'content_ar' => 'الاتصال الهاتفي يمكن أن يسهل عليك الحصول على المساعدة التي تحتاجها في اختيار مدرس خصوصي.',
                 'title_en' => 'Test Title',
                'content_en' => 'Test Desc',
                'image_path' => 'assets/images/news1.png',
                'published_at' => '2025-10-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
