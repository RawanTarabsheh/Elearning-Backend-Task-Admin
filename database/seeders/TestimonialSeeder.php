<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'name_en' => 'Ahmed Ali',
                'name_ar' => 'أحمد علي',
                'title_en' => 'High School Student',
                'title_ar' => 'طالب ثانوي',
                'content_en' => 'This platform helped me understand my lessons easily and improved my grades.',
                'content_ar' => 'ساعدتني هذه المنصة على فهم دروسي بسهولة وتحسين علاماتي الدراسية.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Fatima Noor',
                'name_ar' => 'فاطمة نور',
                'title_en' => 'Parent',
                'title_ar' => 'ولية أمر',
                'content_en' => 'Great teachers and excellent متابعة للطلاب. Highly recommended.',
                'content_ar' => 'معلمون رائعون ومتابعة ممتازة للطلاب. أنصح بها بشدة.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Omar Khaled',
                'name_ar' => 'عمر خالد',
                'title_en' => 'University Student',
                'title_ar' => 'طالب جامعي',
                'content_en' => 'The learning experience is smooth and organized. I love the content quality.',
                'content_ar' => 'تجربة التعلم سلسة ومنظمة، وجودة المحتوى ممتازة جدًا.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
