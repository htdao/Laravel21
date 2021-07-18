<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePassWordRequestFE extends FormRequest
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
//            'current_pwd' => "same:$this->password",
            'new_pwd' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirm_pwd' => 'required|same:new_pwd',
        ];
    }

    public function messages()
    {

        return[
//            'current_pwd.same' => 'Sai mật khẩu!',

            'new_pwd.required' => 'Không được để trống!',
            'new_pwd.min' => 'Mật khẩu phải có ít nhất 6 kí tự!',
            'new_pwd.regex' => 'Mật khẩu phải gồm chữ in hoa, chữ thường, số và kí tự đặc biệt!',

            'confirm_pwd.required' => 'Yêu cầu nhập lại mật khẩu!',
            'confirm_pwd.same' => 'Không trùng với mật khẩu đã nhập!',
        ];

    }

}
