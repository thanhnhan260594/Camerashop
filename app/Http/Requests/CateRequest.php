<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'txtDanhMuc' => 'required|unique:cates,name',
        ];
    }
    public function messages()
    {
        return [
        //Xuất câu thông báo tương ứng với lỗi:
        'txtDanhMuc.required' => 'Chưa nhập tên danh mục',
        'txtDanhMuc.unique'   => 'Tên danh mục đã tồn tại'
        ];
    }
}
