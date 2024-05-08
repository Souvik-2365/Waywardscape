<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageFormRequest extends FormRequest
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

        'destination_id' => 'required|exists:destinations,id',
        'location' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'days' => 'required|numeric',
        'nights' => 'required|numeric',
        'maxpeople' => 'required|numeric',
        'about' => 'required|string',
        'price' => 'required|numeric',
        'discounted_price' => 'required|numeric',

        'repeater-group.*' => 'nullable',
        'repeater-image.*' => 'nullable',


        // 'day' => 'required',
        // 'action' => 'required',
        // 'details' => 'required',
        // 'meals' => 'required',
        // 'activity' => 'required',
        // 'sightseeing' => 'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Validate the file input
        ];
    }

    // public function messages()
    // {
    //     return [
    // //         'day.required' => 'The day field is required.',
    // //         'action.required' => 'The action field is required.',
    // //         'details.required' => 'The details field is required.',
    // //         'meals.required' => 'The meals field is required.',
    // //         'activity.required' => 'The activity field is required.',
    // //         'sightseeing.required' => 'The sightseeing field is required.',
    //         'image.required' => 'The image field is required.',
    //         'image.image' => 'The file must be an image.',
    //         'image.mimes' => 'The image must be a file of type: jpeg, png, jpg',
    //     ];
    // }
}
