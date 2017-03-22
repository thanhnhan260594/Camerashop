<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getList()
    {
        $data = User::select('id','email','name','address','phone')->orderBy('name','ASC')->get()->toArray();
        return view('admin.user.list',compact('data'));
    }

}
