<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BulkUpdateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'exists:categories,id'],
            'product_ids' => ['required', 'array'],
        ];
    }
    public function attributes()
    {
        return [
            'category_id' => 'category',
            'product_ids' => 'products',
        ];
    }
}

