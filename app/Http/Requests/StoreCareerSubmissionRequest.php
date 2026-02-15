<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareerSubmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'job' => ['required', 'string', 'max:255'],
        'years_of_experience' => ['required', 'string', 'max:255'],
        'major_id' => ['required', 'integer', 'exists:majors,id'],
        'name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'string', 'max:50'],
        'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'], // 5MB
    ];
    }
}
