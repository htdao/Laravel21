<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|unique:categories,name',
            ''
        ];
    }

    public function messages()
    {

        return[
            'name.required' => 'Không được để trống!',
            'name.min' => 'Tên phải có ít nhất 3 kí tự!',
            'name.max' => 'Tên có tối đa 50 kí tự!',
            'name.unique' => 'Danh mục đã tồn tại!',

        ];
    }

    public function attributes(){
        return [
            'name' => 'Tên',
        ];
    }
}
