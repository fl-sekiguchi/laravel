<!DOCTYPE html>
<html>
<head>
<title>Sample</title>
</head>
<body>
  <form method="post" action="/sample/create">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" id="titleInput" name="title">
      <label for="bodyInput">本文</label>
      <input type="text" id="bodyInput" name="body">
      <label for="nameInput">名前</label>
      <input type="text" id="nameInput" name="username">
    </div>
    <button type="submit">新規追加</button>
  </form>
</body>
</html>
