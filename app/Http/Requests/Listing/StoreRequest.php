<?php

namespace App\Http\Requests\Listing;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'beds' => 'required',
            'baths' => 'required',
            'area' => 'required',
            'city' => 'required',
            'code' => 'required',
            'street' => 'required',
            'street_nr' => 'required',
            'price' => 'required',

        ];
    }
}
