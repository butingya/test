@extends("layouts.main")

@section("content")

    <form action="{{route('kind.edit',$kind->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label >分类名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$kind->name}}">
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>

@endsection
