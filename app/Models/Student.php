<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
     protected $fillable = [
        'academic_level_id',
        'name_en',
        'name_ar',
        'email',
        'phone',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function academicLevel()
    {
        return $this->belongsTo(AcademicLevel::class);
    }
}
