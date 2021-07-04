<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'avatar' => 'required',
            'email' => 'required|min:15|max:30',
            'password' => 'required|min:6|max:20',
            'phone' => 'required|numberic|min:10|max:10',
            'address' => 'required|min:20|max:100',
        ];
    }

    public function messages()
    {

        return[
            'name.required' => 'Không được để trống!',
            'name.min' => 'Tên phải có ít nhất 5 kí tự!',
            'name.max' => 'Tên có tối đa 30 kí tự!',

            'avatar.required' => 'Không được để trống!',

            'email.required' => 'Không được để trống!',
            'email.min' => 'Email phải có ít nhất 15 kí tự!',
            'email.max' => 'Email tối đa 30 kí tự!',

            'password.required' => 'Không được để trống!',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự!',
            'password.max' => 'Mật khẩu tối đa 20 kí tự!',

            'phone.required' => 'Không được để trống!',
            'phone.min' => 'Không phải số điện thoại!',
            'phone.max' => 'Không phải số điện thoại!',
            'phone.numberic' => 'Không phải số điện thoại!',

            'address.required' => 'Không được để trống!',
            'address.min' => 'Địa chỉ phải có ít nhất 20 kí tự!',
            'address.max' => 'Địa chỉ tối đa 100 kí tự!',
        ];
    }

    public function attributes(){
        return [
            'name' => 'họ tên',
            'avatar' => 'ảnh đại diện',
            'email' => 'email',
            'password' => 'mật khẩu',
            'phone' => 'số điện thoại',
            'address' => 'địa chỉ',
        ];
    }
}
