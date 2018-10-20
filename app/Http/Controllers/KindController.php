<?php

namespace App\Http\Controllers;

use App\Models\Kind;
use Illuminate\Http\Request;

class KindController extends Controller
{
    //显示数据
      public function index(){
          $kinds = Kind::all();
        //显示视图
           return view("kind.index",compact("kinds"));

      }

    //添加数据
      public function add(Request $request){
        //判断是否post提交
          if ($request->isMethod("post")) {
              //验证
                $this->validate($request,[
                  "name"=>"required"
                ]);

              //接收数据
                $data = $request->post();
              //数据入库
              if (Kind::create($data)) {
                  //跳转
                    return redirect()->route("kind.index");
              }
          }else{
              //显示视图
                return view("kind.add");
          }
    }

    //修改数据
      public function edit(Request $request,$id){
        //通过id找对象
          $kind = Kind::find($id);
        //判断是否post提交
          if ($request->isMethod("post")) {
              //验证
                $this->validate($request,[
                  "name"=>"required"
                ]);

              //接收数据
                $data = $request->post();
              //数据入库
              if ($kind->update($data)) {
                  //跳转
                    return redirect()->route("kind.index");
              }
          } else{
              //显示视图
                return view("kind.edit",compact("kind"));
          }
      }
      //删除数据
        public function del($id){
          //通过id找到他
            $kind = Kind::find($id);
          //删除他
            if ($kind->delete()) {
                return redirect()->route("kind.index");
            }
        }
}
