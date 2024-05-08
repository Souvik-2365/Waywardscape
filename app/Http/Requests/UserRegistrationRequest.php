<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'mobile' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'image' => ['required'],
            'address' => ['required', 'string'],
            'password' => ['required', 'min:8', 'confirmed'],
        ];
        // 'image' => ['nullable', 'image', 'max:2048'], // Assuming it's for profile images and can be null
    }
}
