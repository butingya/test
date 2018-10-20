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

    <a href="{{route('kind.add')}}" class="btn btn-success">添加</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>id</th>
            <th>分类</th>
            <th>操作</th>
        </tr>
        @foreach($kinds as $kind)
            <tr>
                <td>{{$kind->id}}</td>
                <td>{{$kind->name}}</td>
                <td>
                    <a href="{{route("kind.edit",$kind->id)}}" class="btn btn-info">编辑</a>
                    <a href="{{route("kind.del",$kind->id)}}" class="btn btn-warning">删除</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
