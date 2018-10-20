@extends("layouts.main")

@section("content")

    <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>分类名</label>
            <input type="text" class="form-control" id="name" placeholder="新加分类" name="name" value="{{old("name")}}">
        </div>

        <button type="submit" class="btn btn-default">添加</button>
    </form>

@endsection
