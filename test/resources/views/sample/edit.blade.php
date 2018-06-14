<!DOCTYPE html>
<html>
<head>
<title>Sample</title>
</head>
<body>
  <h1>修正</h1>
  <form method="post" action="/sample/edit">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$sample->id}}">
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" id="titleInput" name="title" value="{{$sample->title}}">
      <label for="bodyInput">本文</label>
      <input type="text" id="bodyInput" name="body" value="{{$sample->body}}">
      <label for="nameInput">名前</label>
      <input type="text" id="nameInput" name="username" value="{{$sample->username}}">
    </div>
    <button type="submit">修正</button>
  </form>
</body>
</html>
