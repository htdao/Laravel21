<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequestFE extends FormRequest
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
            'name'      => 'required|min:6|max:30',
            'email'     => "required|unique:users,email,$this->id|email|regex:/(.+)@(.+)\.(.+)/i",
            'phone'     => "required|regex:/(0)[0-9]{9}/|unique:users,phone,$this->id",
            'address'   => 'required|min:20|max:100',
        ];
    }

    public function messages()
    {

        return[
            'name.required' => 'Không được để trống!',
            'name.min' => 'Tên phải có ít nhất 6 kí tự!',
            'name.max' => 'Tên có tối đa 30 kí tự!',

            'email.required' => 'Không được để trống!',
            'email.email' => 'Không đúng định dạng!',
            'email.unique' => 'Email đã được sử dụng!',
            'email.regex' => 'Không đúng định dạng!',

            'phone.required' => 'Không được để trống!',
            'phone.regex' => 'Số điện thoại không đúng!',
            'phone.unique' => 'Số điện thoại đã được sử dụng!',

            'address.required' => 'Không được để trống!',
            'address.min' => 'Địa chỉ phải có ít nhất 20 kí tự!',
            'address.max' => 'Địa chỉ tối đa 100 kí tự!',
        ];
    }

    public function attributes(){
        return [
            'name' => 'họ tên',
            'email' => 'email',
            'phone' => 'số điện thoại',
            'address' => 'địa chỉ',
        ];
    }
}
