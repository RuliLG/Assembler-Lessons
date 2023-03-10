<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule = $this->post ? 'sometimes' : 'required';

        return [
            'title' => [$rule, 'string', 'min:8'],
            'content' => [$rule, 'string', 'min:100'],
            'published_at' => [$rule, 'date'],
            'category_id' => [$rule, 'exists:categories,id'],
        ];
    }
}
