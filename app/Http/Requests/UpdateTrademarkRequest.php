<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTrademarkRequest extends FormRequest
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
            'name' => "required|max:50|min:2|unique:trademarks,name,$this->id"
        ];
    }

    public function messages()
    {

        return[
            'name.required' => 'Không được để trống!',
            'name.min' => 'Tên phải có ít nhất 2 kí tự!',
            'name.max' => 'Tên có tối đa 50 kí tự!',
            'name.unique' => 'Thương hiệu đã tồn tại!!',

        ];
    }

    public function attributes(){
        return [
            'name' => 'Tên',
        ];
    }
}
