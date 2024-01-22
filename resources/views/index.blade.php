<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/confirm" method="post">
    @csrf
      <th>お名前</th>
      <td>
        @error('first_name')
          <tr>{{$message}}</tr>
        @enderror
          <input type="text" name="first_name" placeholder="例）山田" value="{{ old('first_name') }}">
        @if($errors->has('last_name'))
          <p>{{$errors->first('last_name') }}</p>
        @endif
        <input type="text" name="last_name" placeholder="例）太郎" value="{{ old('last_name') }}">
      </td>
        <th>性別</th>
        @if($errors->has('gender'))
          <p>{{$errors->first('gender') }}</p>
        @endif
          <td>
            <label><input type="radio" name="gender"  value="0">男性</label>
            <label><input type="radio" name="gender" value="1">>女性</label>
            <label><input type="radio" name="gender" value="2">>その他</label>
          </td>
        </tr>
      <td>
        <td><button>確認画面</button></td>
      </td>
  </form>
</body>
</html>