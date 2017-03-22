<?php

namespace App\Http\Controllers;
use DB,Mail,Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;

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

    public function News()
    {
        return view('user.pages.news');
    }

    public function Introduce()
    {
        return view('user.pages.intro');
    }

    public function Service()
    {
        return view('user.pages.service');
    }

    public function getContact()
    {
        return view('user.pages.contact');
    }

    public function postContact(Request $request)
    {
       $data = array(
            'txtName' => $request->txtName,
            'txtSubject' => $request->txtSubject,
            'txtEmail'=> $request->txtEmail,
            'txtContent'=> $request->txtContent
            );
        Mail::send('user.blocks.sendmail', $data ,function($message) use ($data){
                $message->from($data['txtEmail'],$data['txtName']);
                $message->to('thanhnhan260594@gmail.com', $data['txtName']);
                $message->subject($data['txtSubject']);
        });
       echo "
       <script>
            alert('Cảm ơn bạn đã góp ý. Chúng tôi sẽ sẽ sớm liên hệ với bạn!');
            window.location = '".url('/')."'
       </script>";
    }
}
