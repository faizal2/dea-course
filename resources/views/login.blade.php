@extends('Layout/isGuest')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card border-info shadow my-5">
                    <div class="card-body p-4">
                        <div class="card shadow bg-info mb-4 ">
                            <div class="card-body text-center">
                                <div class="h5 ">LOGIN DEACOURSE</div>
                            </div>
                        </div>

                        @if (session()->get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form action={{ route('login_action') }} method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control " id="username" name="username"
                                    placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control " id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="d-grid col-12 mb-3">
                                <button type="submit" class="btn btn-outline-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="d-grid col-12 mb-3">
                            <a href={{ route('register_form') }} class="btn btn-outline-dark">
                                Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
