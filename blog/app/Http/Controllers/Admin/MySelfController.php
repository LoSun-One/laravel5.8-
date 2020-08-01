<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Myself;

class MySelfController extends Controller
{
    //
    public function index(Request $request){
        $user = $request->user;
        $data = Myself::where('root',$user)->first();
        return view('admin.setself',['data'=>$data]); 
    }
    public function save(Request $request){
        $iRoot = $request->input('root');
        $iName = $request->input('name');
        $iPen = $request -> input('pen');
        $iBirthday = $request -> input('birthday');
        if (empty($iName)){
            return "昵称不能为空。";
        }
        
        if (empty($iBirthday)){
            return "生日不能为空。";
        }
        Myself::where('root',$iRoot)->update(['name'=>$iName],['pen'=>$iPen],['birthday'=>$iBirthday]);
        redirect()->route('/api/admin/home/', ['user'=>$iRoot]);
    }
}
