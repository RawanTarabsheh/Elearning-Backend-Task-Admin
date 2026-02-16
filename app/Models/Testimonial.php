<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
      protected $fillable = [
        'name_en','name_ar',
        'title_en','title_ar',
        'content_en','content_ar',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
