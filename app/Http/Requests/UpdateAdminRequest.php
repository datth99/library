<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'password' => 'same:password_confirmation',
            'email' => ['required','unique:users,email,'.$this->id]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên thủ thư không được để trống!',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.max' => 'Email không được vượt quá 255 kí tự!',
            'email.min' => 'Email phải tối thiểu 6 kí tự!',
            'email.unique' => 'Email đã được đăng ký!',
            'password.same' => 'Mật khẩu không khớp!'
        ];
    }
}
