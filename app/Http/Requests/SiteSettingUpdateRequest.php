<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:1024|mimes:png,jpg,jpeg,webp',
            'fav_icon' => 'nullable|string|max:1024|mimes:png,jpg,jpeg,webp,icon',
        ];
    }
}
