<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ];
    }

    public function messages()
    {

        return [

            'email.required' => 'Nhập email!',
            'email.email' => 'Không đúng định dạng!',
            'email.regex' => 'Không đúng định dạng!',

            'password.required' => 'Nhập mật khẩu!',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'email',
            'password' => 'mật khẩu',
        ];

    }
}
