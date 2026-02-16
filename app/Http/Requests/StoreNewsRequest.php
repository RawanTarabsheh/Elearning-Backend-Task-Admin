<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
        'title_en' => ['required','string','max:255'],
        'title_ar' => ['required','string','max:255'],
        'content_en' => ['required','string'],
        'content_ar' => ['required','string'],
        'image' => ['nullable','image','max:4096'], // 4MB
        'published_at' => ['nullable','date'],
        'is_active' => ['nullable','boolean'],
    ];
}

    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_active' => $this->boolean('is_active'),
        ]);
    }
}
