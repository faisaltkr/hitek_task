<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HandsetStoreRequest extends FormRequest
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
            'name' => 'required|max:100',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric',
            'release_date' => 'required|date',
            'features' => 'nullable|array'
        ];
    }
}
