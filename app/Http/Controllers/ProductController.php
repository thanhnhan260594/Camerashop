<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Cate;
use App\Brand;

class ProductController extends Controller
{
   	public function getList()
   	{
   		$data = Product::select('id','name','description','price','quantity','image','id_cate','id_brand')->orderBy('name','ASC')->get()->toArray();
		return view('admin.product.list',compact('data'));
   	}
    public function getAdd()
    {
    	$cate = Cate::select('id','name')->get()->toArray();
    	$brand = Brand::select('id','name')->get()->toArray();
    	return view('admin.product.add',compact('cate','brand'));
    }

    public function postAdd(ProductRequest $request)
    {
        $file_name = $request->fHinhAnh->getClientOriginalName();
    	$product = new Product;
    	$product->name = $request->txtSanPham;
    	$product->description = $request->txtMoTa;
    	$product->price = $request->txtGia;
    	$product->quantity = $request->txtSoLuong;
    	$product->image = $file_name;
    	$product->id_cate = $request->sltDanhMuc;
    	$product->id_brand = $request->stlThuongHieu;
    	$product->slug = str_slug($request->txtSanPham);    	
    	$product->status = 1;

        $request->file('fHinhAnh')->move(public_path('uploads'), $file_name);
    	$product->save();
    
    	return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Thông báo||Thêm thành công']);
    }

    public function getEdit()
    {

    }

    public function postEdit()
    {

    }

    public function getDelete()
    {

    }
}
