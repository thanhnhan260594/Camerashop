<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            //Viết chặn lỗi
            'txtThuongHieu' => 'required|unique:brands,name',
        ];
    }
    public function messages()
    {
        return [
        //Xuất câu thông báo tương ứng với lỗi:
        'txtThuongHieu.required' => 'Chưa nhập tên thương hiệu',
        'txtThuongHieu.unique'   => 'Tên thương hiệu đã tồn tại'
        ];
    }
}
