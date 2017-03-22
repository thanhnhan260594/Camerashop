<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtSanPham' => 'required',
            'txtGia' => 'required',
            'sltDanhMuc' => 'required',
            'stlThuongHieu' => 'required'
        ];
    }
    public function messages(){
        return[
        'sltDanhMuc.required' => 'Chọn danh mục',
        'stlThuongHieu.required' => 'Chọn thương hiệu',
        'txtSanPham.required' => 'Nhập tên sản phẩm',
        'txtGia.required'=>'Nhập giá',
        ];
    }
}
