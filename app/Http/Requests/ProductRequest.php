<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
        'txtSanPham' => 'required|unique:products,name',        

        ];
    }

    public function message()
    {
        return [
        'txtSanPham.required'=>'Phải nhập tên sản phẩm',
        'txtSanPham.unique'=> 'Tên sản phẩm đã tồn tại'
        ];
    }
}
