<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;

class CateController extends Controller
{
	// Hàm tra ve danh sach danh muc
	public function getList()
	{
		$data = Cate::select('id','name','description')->orderBy('name','ASC')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}
    // lấy function thêm
    public function getAdd()
    {
    	return view('admin.cate.add');
    }
    // thực hiện post dữ liệu
    public function postAdd(CateRequest $request)
    {
    	$cate = new Cate;
    	$cate->name 		= $request->txtDanhMuc;
    	$cate->description 	= $request->txtMoTa;
    	$cate->slug 		= str_slug($request->txtDanhMuc);
    	$cate->save();
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thông báo||Thêm thành công']);
    }
    public function getEdit($id)
    {
    	$data = Cate::findorFail($id)->toArray();
    	return view('admin.cate.edit',compact('data','id'));
    }
    public function postEdit($id, Request $request)
    {
        $this->validate($request,
            ["txtDanhMuc" => "required"],
            ["txtDanhMuc.required" => "Tên danh mục không được để trống!"]);
        $data = Cate::find($id);
        $data->name      = $request->txtDanhMuc;
        $data->description  = $request->txtMoTa;
        $data->slug         = str_slug($request->txtDanhMuc);
        $data->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thông báo||Chỉnh sửa thành công']);
    }
    public function getDelete($id)
    {
    	$cate = Cate::find($id);
    	$cate->delete();
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'warning','flash_message'=>'Thông báo||Xóa thành công']);

    }
}
