<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\MajorApiController;
use App\Http\Controllers\Api\V1\CareerSubmissionApiController;

Route::prefix('v1')->group(function () {
    Route::get('majors', [MajorApiController::class, 'index']);
    Route::post('careers/submit', [CareerSubmissionApiController::class, 'store']);

});
