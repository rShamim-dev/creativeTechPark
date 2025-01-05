<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeoSettingUpdateRequest extends FormRequest
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
            'meta_title' => 'nullable|string',
            'meta_tag' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|string',
            'og_title' => 'nullable|string',
            'og_description' => 'nullable|string',
            'og_url' => 'nullable|string',
            'og_type' => 'nullable|string',
            'twitter_card' => 'nullable|string',
            'twitter_title' => 'nullable|string',
            'twitter_description' => 'nullable|string',
            'robots' => 'nullable|string',
            'author' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'meta_tag.string' => 'The meta tag must be a valid string.',
            'meta_description.string' => 'The meta description must be a valid string.',
            'meta_title.string' => 'The meta title must be a valid string.',
            'og_title.string' => 'The Open Graph title must be a valid string.',
            'og_description.string' => 'The Open Graph description must be a valid string.',
            'og_url.string' => 'The Open Graph URL must be a valid string.',
            'og_type.string' => 'The Open Graph type must be a valid string.',
            'twitter_card.string' => 'The Twitter card must be a valid string.',
            'twitter_title.string' => 'The Twitter title must be a valid string.',
            'twitter_description.string' => 'The Twitter description must be a valid string.',
            'robots.string' => 'The robots meta tag must be a valid string.',
            'author.string' => 'The author field must be a valid string.',
        ];
    }
}
