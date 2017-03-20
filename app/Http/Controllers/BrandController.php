<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Brand;

class BrandController extends Controller
{
    //
    public function getList()
	{
		$data = Brand::select('id','name','description','logo')->orderBy('name','ASC')->get()->toArray();
		return view('admin.brand.list',compact('data'));
	}
    // lấy function thêm
    public function getAdd()
    {
    	return view('admin.brand.add');
    }
    // thực hiện post dữ liệu
    public function postAdd(BrandRequest $request)
    {
        $file_name =  $request->fLogo->getClientOriginalName();
    	$brand = new Brand;
    	$brand->name 			= $request->txtThuongHieu;
    	$brand->description 	= $request->txtMoTa;
    	$brand->slug 			= str_slug($request->txtThuongHieu);
    	$brand->logo 			= $file_name;

        $request->file('fLogo')->move(public_path('uploads/logo'), $file_name);
    	$brand->save();
    	return redirect()->route('admin.brand.list')->with(['flash_level'=>'success','flash_message'=>'Thông báo||Thêm thành công']);
    }
    public function getEdit($id)
    {
    	$data = Brand::findorFail($id)->toArray();
    	return view('admin.brand.edit',compact('data','id'));
    }
    public function postEdit($id, Request $request)
    {
        $this->validate($request,
            ["txtThuongHieu" => "required"],
            ["txtThuongHieu.required" => "Tên thương hiệu không được để trống!"]);
        $brand = Brand::find($id);
        $brand->name           = $request->txtThuongHieu;
        $brand->description     = $request->txtMoTa;
        $brand->slug            = str_slug($request->txtThuongHieu);
        //$brand->logo          = $request->txtLogo;
        $brand->save();
        return redirect()->route('admin.brand.list')->with(['flash_level'=>'success','flash_message'=>'Thông báo||Sửa thành công']);
    }
    //Xóa dữ liệu
    public function getDelete($id)
    {
    	$brand = Brand::find($id);
    	$brand->delete();
    	return redirect()->route('admin.brand.list')->with(['flash_level'=>'warning','flash_message'=>'Thông báo||Xóa thành công']);

    }
}
