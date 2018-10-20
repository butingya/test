<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //显示数据
      public function index(){
          $categorys = Category::all();
        //显示视图传递数据
          return view("category/index",compact('categorys'));
      }

    //添加数据
      public function add(Request $request){
          //是不是post提交
            if($request->isMethod("post")){
                //验证
                  $this->validate($request,[
                      "name"=>"required"
                  ]);
                //接收数据
                  $data = $request->post();
                //数据入库
                  if(Category::create($data)){
                      //跳转
                        session()->flash("success","添加成功");
                        return redirect()->route('category.index');
                  }
            }else{
                //显示视图
                  return view("category.add");
            }
      }

      //修改
         public function edit(Request $request,$id){
          //通过id找对象
            $category = Category::find($id);
          //判定是否post提交
             if ($request->isMethod("post")) {
                 //验证
                   $this->validate($request,[
                     "name"=>"required"
                   ]);

                 //接收数据
                   $data = $request->post();
                 //数据入库
                 if ($category->update($data)) {
                     //跳转
                       session()->flash("success","修改成功");
                       return redirect()->route('category.index');
                 }
             } else{
                 //显示视图
                 return view("category.edit", compact("category"));
             }
        }

        //删除
          public function del($id){
            //通过id找对象
              $category = Category::find($id);
            //删除
              if ($category->delete()) {
                  session()->flash("success","删除成功");
                  return redirect()->route('category.index');
              }
          }





}
