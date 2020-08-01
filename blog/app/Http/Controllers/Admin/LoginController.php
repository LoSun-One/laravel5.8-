<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    //页面加载
    public function index(){
        return view('admin/lo');
    }

    //登录验证
    public function login(Request $request){
        $user = trim($request->input('user'));
        $psw = trim($request -> input('password'));
        $validation = trim($request -> input('validation'));

        if ($user==""){
            return ['status'=>'0','msg'=>'请输入用户名','lable'=>'userl'];
        }
        if ($psw==""){
            return ['status'=>'0','msg'=>'请输入密码','lable'=>'passwordl'];
        }
        if ($validation==""){
           return ['status'=>'0','msg'=>'请输入验证码','lable'=>'validationl'];
        }
        $result = Admin::where('root',$user)->first();
        if ($result==null){
            return ['status'=>'0','msg'=>'用户名不存在','lable'=>'userl'];
        }
        if (($result->psw)!=$psw){
            return ['status'=>'0','msg'=>'密码错误','lable'=>'passwordl'];
        }







        session(['admin'=>$result]);
        session()->save();
        return redirect('/api/admin/home/?user='.$user);
    }

}
