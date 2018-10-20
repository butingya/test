@extends("layouts.main")

@section("content")

    <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>名称</label>
            <input type="text" class="form-control" placeholder="新加商品" name="name" value="{{old("name")}}">
        </div>

        <div class="form-group">
            <label>价格</label>
            <input type="text" class="form-control" placeholder="新加价格" name="price" value="{{old("price")}}">
        </div>

        <div class="form-group">
            <label for="content">详情</label>
            <input type="text" class="form-control" placeholder="新加详情" name="intro" value="{{old("intro")}}">
        </div>

        <div class="form-group">
            <label for="content">是否上架</label>
            <input type="radio" name="shelf" value="1"/> 是
            <input type="radio" name="shelf" value="0" checked/> 否
        </div>

        <div class="form-group">
            <label>类别</label>

            <select name="kind_id">
                @foreach($results as $result)
                    <option value="{{$result->id}}">{{$result->name}}</option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-default">添加</button>
    </form>

@endsection
