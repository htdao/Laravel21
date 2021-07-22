<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:10|max:150|unique:products,name',
            'origin_price' => 'required|numeric|min:500|max:1000000000|lt:sale_price',
            'sale_price' => 'required|numeric|min:1000|max:1000000000',
            'content' => 'required|min:10|max:500000',
            'image' => 'required',
            'amount' => 'required|min:10|max:1000|numeric|integer'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Không được để trống!',
            'name.min' => 'Tên phải có ít nhất 10 kí tự!',
            'name.max' => 'Tên có tối đa 150 kí tự!',
            'name.unique' => 'Tên đã tồn tại!',

            'origin_price.required' => 'Không được để trống!',
            'origin_price.max' => 'Không vượt quá 1.000.000.000 VND',
            'origin_price.min' => 'Không nhỏ hơn 500 VND',
            'origin_price.numeric' => 'Yêu cầu nhập số!',
            'origin_price.lt' => 'Giá gốc phải nhỏ hơn giá bán!',


            'sale_price.required' => 'Không được để trống!',
            'sale_price.numeric' => 'Yêu cầu nhập số!',
            'sale_price.max' => 'Không vượt quá 1.000.000.000 VND',
            'sale_price.min' => 'Không nhỏ hơn 500 VND',

            'content.required' => 'Không được để trống!',
            'content.min' => 'Mô tả ít nhất 10 kí tự!',
            'content.max' => 'Mô tả tối đa 255 kí tự!',

            'image.required' => 'Không được để trống!',

            'amount.required' => 'Không được để trống!',
            'amount.numeric' => 'Yêu cầu nhập số!',
            'amount.max' => 'Không vượt quá 1.000 sản phẩm!',
            'amount.min' => 'Không nhỏ hơn 10 sản phẩm!',
            'amount.integer' => 'Yêu cầu nhập số nguyên!',

        ];
    }

    public function attributes(){
        return [
            'name' => 'Tên',
            'sale_price' => 'giá khuyến mại',
            'origin_price' => 'giá gốc',
            'content' => 'mô tả',
            'image' => 'hình ảnh',
            'content_more' => 'thông số sản phẩm',
            'quantity' => 'số lượng',
        ];
    }
}
