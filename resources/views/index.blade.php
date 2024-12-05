<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Socialite demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-5">
                <h1>Login With Google</h1>
                <div class="mt-5 card">
                    <div class="card-body">
                        @auth
                            <h4>Name : {{ auth('web')->user()->name }}</h4>
                            <h4>Email : {{ auth('web')->user()->email }}</h4>
                            <hr>
                            <form action="{{ route('logout') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        @else
                        <a href="{{ route('redirect') }}">Google</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>