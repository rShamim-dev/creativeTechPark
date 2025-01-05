<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:categories,name,' . $this->category->id,
            'slug' => 'required|string|max:255|unique:categories,slug,' . $this->category->id,
            'status' => 'required|boolean|in:0,1',
        ];
    }

    /**
     * Summary of messages
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The category name is required.',
            'name.unique' => 'The category name must be unique.',
            'slug.required' => 'The category slug is required.',
            'slug.unique' => 'The category slug must be unique.',
        ];
    }
}
