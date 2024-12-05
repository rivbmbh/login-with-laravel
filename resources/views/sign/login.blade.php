<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Laravel Socialite</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <div class="wrapper">
            @include('sweetalert::alert')
            <form action="" method="POST">
                @csrf
                <table class="parent">
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:</td>
                        <td><input type="email" name="email" id="email" placeholder="Masukkan email Anda..." required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password" placeholder="Masukkan password Anda..." required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="btn-submit">
                            <button type="submit">Login</button>
                        </td>
                    </tr>
                    <tr>
                        <td><hr></td>
                        <td>atau</td>
                        <td><hr></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <a href="{{ route('auth.google') }}">Masuk dengan Google</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align:center;">
                            Belum punya akun? <a href="{{ route('sign_up') }}">Daftar</a>
                        </td>
                    </tr>
                </table>
            </form>
            
        </div>
    </div>
</body>
</html>