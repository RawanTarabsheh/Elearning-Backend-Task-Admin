<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerSubmission extends Model
{
    //
    protected $fillable = [
        'job',
        'years_of_experience',
        'major_id',
        'name',
        'phone',
        'cv_path',
        'cv_original_name',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
