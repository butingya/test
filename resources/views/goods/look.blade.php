<style type="text/css">
    table{
        width: 300px;
    }
    table th{
        text-align: center;
        /*width: 300px;*/
        height: 70px;
    }
    table td{
        height: 70px;
        text-align: center;
    }
</style>
@extends("layouts.main")

@section("content")

    <a href="{{route('goods.index')}}" class="btn btn-success">首页</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>名称</th>
            <th>详情</th>
            <th>价格</th>

        </tr>

            <tr>
                <td>{{$goods->name}}</td>
                <td>{{$goods->intro}}</td>
                <td>{{$goods->price}}</td>


            </tr>

    </table>

@endsection
