<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="/" method="post">
    <p>氏名</p>
    @csrf
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="text" name="mail">
    <input type="submit" value="送信する">
    <!-- @foreach($items as $item)
    <ul>
      <li>{{$item->name}}</li>
      <li>{{$item->mail}}</li>
    </ul>
    @endforeach -->
  </form>
</body>

</html>