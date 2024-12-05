<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    @include('sweetalert::alert')
    <a href="{{ route('sign_out') }}">LOGOUT</a>
    <h1>WELCOME TO HOME PAGE</h1>
</body>
</html>