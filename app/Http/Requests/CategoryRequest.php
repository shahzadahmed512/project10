<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Define authorization logic here, if needed
        return true; // For demonstration purposes, always authorize
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Define validation rules for the request data
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            // Include any other relevant validation rules
        ];
    }
}
