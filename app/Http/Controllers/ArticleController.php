<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //显示所有数据
      public function index(){
        //得到所有数据
          $articles = Article::all();
        //显示视图并传递数据
          return view("article/index",compact('articles'));
      }

    //添加数据
      public function add(Request $request){
        //判定是不是post提交
          if ($request->isMethod("post")) {
              //验证
              $this->validate($request,[
                  "title"=>"required",
                  "auhtor"=>"required",
                  "content"=>"required"
              ]);

              //接收数据
                $data = $request->post();
              if (Article::create($data)) {
                //跳转
                  session()->flash("success","添加成功");
                  return redirect()->route('article.index');
              }
          }else{
              //显示视图
                $results = Category::all();
                return view("article.add",compact("results"));
          }
      }

      //数据修改
        public function edit(Request $request,$id){
          //通过id找到他
            $article = Article::find($id);
          //判定是否post提交
            if ($request->isMethod("post")) {
              //验证
                $this->validate($request,[
                    "title"=>"required",
                    "auhtor"=>"required",
                    "content"=>"required"
                ]);
              //接收数据
                $data = $request->post();
              //数据入库
                if ($article->update($data)) {
                    //跳转
                      session()->flash("success","修改成功");
                      return redirect()->route('article.index');
                }
            } else{
                //显示视图
                  $results = Category::all();
                  return view("article.edit",compact("article","results"));
            }
        }

      //删除
        public function del($id){
            //通过id找到他
              $article = Article::find($id);
            //删除
            if ($article->delete()) {
                return redirect()->route('article.index');
            }
        }
}
