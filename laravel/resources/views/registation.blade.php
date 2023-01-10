<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="{{csrf_token()}}">
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link rel="icon" type="image/png" href="icon.ico" sizes="16x16" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>Регистрация</h1>
<form class="col-3 offset-4 border rounded" method="Get" action="{{route('user.registation')}}">
    @method('put')
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
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
    </div>
</form>
</body>
</html>

