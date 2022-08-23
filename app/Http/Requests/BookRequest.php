<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        return [
            'name' => 'required',
            'author' => 'required',
            'quantity' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sách thư không được để trống!',
            'author.required' => 'Tác giả không được để trống!',
            'quantity.required' => 'Số lượng không được để trống!',           
        ];
    }
}
