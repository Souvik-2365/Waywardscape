<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => [
                'required',
            ],
            'mobile' => [
                'required',
            ],
            'address' => [
                'required',
            ],
            'image' => [
                'nullable',
                'image', // Ensure the uploaded file is an image
                function ($attribute, $value, $fail) {
                    $image = getimagesize($value);
            
                    if ($image[0] !== $image[1]) { // Check if width is not equal to height
                        $fail('The :attribute must be a square image (width equals height).');
                    }
                },
            ],
            

        ];
    }

    public function messages()
{
    return [
        'image.nullable' => 'The image field must be a valid image file.',
        // 'image.dimensions' => 'The image dimensions should not exceed 250x250 pixels.',
        'image.image' => 'The image field must be a valid image file.',
    ];
}
}
