<style type="text/css">
    table{
        width: 300px;
    }
    table th{
        text-align: center;
        width: 100px;
        height: 70px;
    }
    table td{
        height: 70px;
        text-align: center;
    }
</style>
@extends("layouts.main")

@section("content")

    <a href="{{route('goods.add')}}" class="btn btn-success">添加</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>名称</th>
            <th>价格</th>
            <th>详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
            <th>类别</th>
            <th>操作</th>
        </tr>
        @foreach($goods as $good)
            <tr>
                <td>{{$good->name}}</td>
                <td>{{$good->price}}</td>
                <td>{{$good->intro}}</td>
                <td>{{$good->shelf}}</td>
                <td>{{$good->show}}</td>
                <td>{{$good->kind->name}}</td>
                <td>
                    <a href="{{route("goods.edit",$good->id)}}" class="btn btn-info">编辑</a>
                    <a href="{{route("goods.del",$good->id)}}" class="btn btn-warning">删除</a>
                    <a href="{{route("goods.look",$good->id)}}" class="btn btn-default">查看</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
