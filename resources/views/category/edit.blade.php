@extends("layouts.main")

@section("content")

    <form action="{{route('category.edit',$category->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label >分类名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>

@endsection
