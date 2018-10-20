@extends("layouts.main")

@section("content")

    <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>标题</label>
            <input type="text" class="form-control" placeholder="新加标题" name="title" value="{{old("title")}}">
        </div>

        <div class="form-group">
            <label>作者</label>
            <input type="text" class="form-control" placeholder="新加作者" name="auhtor" value="{{old("auhtor")}}">
        </div>

        <div class="form-group">
            <label for="content">内容</label>
            <textarea name="content" cols="30" rows="10" class="form-control">{{old("content")}}</textarea>
        </div>

        <div class="form-group">
            <label>分类</label>

            <select name="category_id">
                @foreach($results as $result)
                    <option value="{{$result->id}}">{{$result->name}}</option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-default">添加</button>
    </form>

@endsection
