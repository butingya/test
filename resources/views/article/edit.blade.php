@extends("layouts.main")

@section("content")

    <form action="{{route('article.edit',$article->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label >标题</label>
            <input type="text" class="form-control" name="title" value="{{$article->title}}">
        </div>

        <div class="form-group">
            <label >作者</label>
            <input type="text" class="form-control" name="auhtor" value="{{$article->auhtor}}">
        </div>

        <div class="form-group">
            <label >内容</label>
            <input type="text" class="form-control" name="content" value="{{$article->content}}">
        </div>

        <div class="form-group">
            <label >分类</label>
            <select name="category_id">
                @foreach($results as $result)
                    <option value="{{$result->id}}" <?php if($result['id']===$article['category_id']) echo "selected='selected'";?>>{{$result->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>

@endsection
