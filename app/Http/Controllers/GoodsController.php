<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\Kind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    //显示数据
      public function index(){
         $goods = Goods::all();
//          DB::table('goods')->increment('show',1);
         return view("goods.index",compact('goods'));
      }

    //添加
      public function add(Request $request){
          //判断是否post提交
          if ($request->isMethod("post")) {
             //验证
              $this->validate($request,[
                  "name"=>"required",
                  "price"=>"required",
                  "intro"=>"required",
              ]);

            //接收数据
              $data = $request->post();
            //存入数据库
              if (Goods::create($data)) {
                  //跳转
                    return redirect()->route("goods.index");
              }
          }else{
              //显示视图
                $results = Kind::all();
                return view("goods.add",compact("results"));
          }
      }

      //数据修改
        public function edit(Request $request,$id){
          //通过id找对象
            $goods = Goods::find($id);
          //是不是post提交
            if ($request->isMethod("post")) {
                //验证
                $this->validate($request,[
                    "name"=>"required",
                    "price"=>"required",
                    "intro"=>"required",
                ]);

                $data = $request->post();
              //数据入库
                if ($goods->update($data)) {
                    //页面跳转
                      return redirect()->route("goods.index");
                }
            }  else{
                //显示视图
                  $results = Kind::all();
                  return view("goods.edit",compact("goods","results"));
            }
        }

      //删除
        public function del($id){
            //通过id找到他
            $goods = Goods::find($id);
//            dd($goods);
            //删除
            if ($goods->delete()) {
                return redirect()->route('goods.index');
            }
        }


        public function look($id){

//            return redirect()->route('goods.index');
            $goods = Goods::find($id);
            DB::table('goods')->where('id',$id)->increment('show', 1);
            return view('goods.look',compact("goods"));
        }
}
