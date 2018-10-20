<style type="text/css">
    table{
        width: 300px;
    }
    table th{
        text-align: center;
        width: 300px;
        height: 70px;
    }
    table td{
        height: 70px;
        text-align: center;
    }
</style>
@extends("layouts.main")

@section("content")

    <a href="{{route('article.add')}}" class="btn btn-success">添加</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>标题</th>
            <th>作者</th>
            <th>内容</th>
            <th>分类</th>
            <th>操作</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->auhtor}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->category->name}}</td>
                <td>
                    <a href="{{route("article.edit",$article->id)}}" class="btn btn-info">编辑</a>
                    <a href="{{route("article.del",$article->id)}}" class="btn btn-warning">删除</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
