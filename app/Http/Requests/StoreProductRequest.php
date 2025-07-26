<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'brand' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:1000',
            'weight' => 'required|numeric|min:0',
        ];
    }

    public function attributes(){
        return [
            'category_id' => 'category',
            'description' => 'product description',
            'weight' => 'product weight',
        ];
    }

    // public function prepareForValidation()
    // {
    //     $this->merge([
    //         'category_id' => $this->category_id ?? null,
    //         'description' => $this->description ?? '',
    //         'weight' => $this->weight ?? 0,
    //         'price' => $this->price ?? 0,
    //     ]);
    // }
}
