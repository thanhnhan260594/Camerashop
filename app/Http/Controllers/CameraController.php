<?php

namespace App\Http\Controllers;
use DB,Mail,Requests;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    //
    public function index()
    {
        $product = DB::table('products')->orderBy('id','DESC')->skip(0)->take(3)->get();
        $product_hot = DB::table('products')->orderBy('quantity','DESC')->skip(0)->paginate(2);
    	return view('user.pages.index',compact('product','product_hot'));
    }

    public function Cates($id)
    {
        $cate = DB::table('cates')->where('id',$id)->first();
        $product_cate = DB::table('products')->where('id_cate',$id)->paginate(2);
    	return view('user.pages.cate',compact('cate','product_cate'));
    }
	public function Brands($id)
    {
        $brand = DB::table('brands')->where('id',$id)->first();
        $product_brand = DB::table('products')->where('id_brand',$id)->paginate(2);       
    	return view('user.pages.brand',compact('brand','product_brand'));
    }

    public function Detail($id)
    {
        $pdetail = DB::table('products')->where('id',$id)->first();
        return view('user.pages.product',compact('pdetail'));
    }
    public function getContact()
    {
        return view('user.pages.contact');
    }
    public function postContact()
    {
        $data = ['hoten' => 'Đinh Thành Nhân'];
       Mail::send('user.blocks.sendmail',$data,function($msg)
       {
        $msg->from('thanhnhan260594@gmail.com', 'Người gửi');
        $msg->to('thanhnhan260594@gmail.com','Người nhận')->subject('Test send mail!');
       });
    }
}
