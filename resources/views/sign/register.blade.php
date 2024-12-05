<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Laravel Socialite</title>
    <style>
        .container{
            margin-top: 300px;
        }
        .wrapper{
            /* margin-top: 20%; */
            width: 100%;
            display: flex;
            justify-content: center;
        }
        h1{
            text-align: center;
        }
        .btn-submit{
            text-align: end;
            padding: 5px;
        }
        .google{
            text-align: start;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>REGISTRASI</h1>
        <div class="wrapper">
            @include('sweetalert::alert')
            <form action="" method="POST">
                @csrf
                <table class="parent">
                    <tr>
                        <td><label for="username">USERNAME</label></td>
                        <td>:</td>
                        <td><input type="text" name="username" id="username" placeholder="your username.."></td>
                    </tr>
                    <tr>
                        <td><label for="password">PASSWORD</label></td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password" placeholder="your password.."></td>
                    </tr>
                    <tr>
                        <td><label for="password">CONFIRM PASSWORD</label></td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password" placeholder="your password.."></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="btn-submit"><button type="submit">REGISTER</button></td>
                    </tr>
                    <tr>
                        <td><hr></td>
                        <td><hr></td>
                        <td><hr></td>
                    </tr>
                    <tr>
                        <td class="google">sing up with <a href="{{ route('auth.google') }}">GOOGLE</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>