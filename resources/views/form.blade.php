<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/thanks" method='post'>
    @csrf
    <tr>
      <th>苗字</th>
      <td>{{ $forms['first_name'] }}</td>
      <th><input type="hidden" name="first_name" value="{{ $forms['first_name'] }}"></th>
      
    </tr>
    <tr>
      <th>名前</th>
      <td>{{ $forms['last_name'] }}</td>
      <th><input type="hidden" name="last_name" value="{{ $forms['last_name'] }}"></th>
    </tr>
      <th>性別</th>
      <td>{{ $forms['gender'] }}</td>
      <th><input type="hidden" name="gender" value="{{ $forms['gender'] }}"></th>
    </tr>
  <td><button>送信</button></td>
</form>
  <td><button><a href="/">戻る</a></button></td>
    
</body>
</html>