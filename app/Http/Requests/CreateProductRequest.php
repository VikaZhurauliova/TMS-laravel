<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2',
            'short_description' => 'nullable|min:2',
            'description' => 'nullable',
            'price' => 'required|min:1',
            'sale_price' => 'nullable|min:1',
            'category_id' => 'nullable|integer',
            'is_active' => 'nullable',
            'tag' => 'nullable',
            'image' => 'nullable',
            'created_at' => 'nullable',
            'files' => 'nullable'
        ];
    }
}
