<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEACOURSE LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark  fixed-top bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Deacourse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('dashboard_index') }}>Dashboard</a>
                    </li>
                </ul>
                <form class="d-flex justify-content-end" action={{ route('dashboard_logout') }} method="POST">
                    @csrf
                    <input class="form-control" type="hidden" name="token" value={{ $users->token }}>
                    <button class="btn btn-danger" type="submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </nav>

    <div>
        {{-- our content --}}
        @yield('content')
    </div>
    {{-- out of our content --}}
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-3 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; Deacourse-Larafel</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
