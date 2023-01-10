<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="{{csrf_token()}}">
    <title>Login form</title>
    <link href="{{asset('css/app.css')}}">
</head>
<body>
<h1>Регистрация</h1>
<form class="col-3 offset-4 border rounded" method="POST" action="{{route('user.registation')}}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Ваш Email</label>
        <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label-lg">Пароль</label>
        <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
</form>
</body>
</html>

