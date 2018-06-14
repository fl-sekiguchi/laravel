<!DOCTYPE html>
<html>
<head>
<title>Sample</title>
</head>
<body>
<p><a href="/sample/create">新規追加</a></p>
@foreach($samples as $sample)
<div>
    <div>{{{ $sample->id }}}</div>
    <div>{{{ $sample->title }}}</div>
    <div>{{{ $sample->body }}}</div>
    <div>{{{ $sample->username }}}</div>
    <div>{{{ $sample->created_at }}}</div>
    <div>{{{ $sample->updated_at }}}</div>
    <a href="/sample/edit/{{$sample->id}}">修正</a>
    <a href="/sample/delete/{{$sample->id}}">削除</a>
</div>
<hr>
@endforeach
</body>
</html>
