@extends('Layout/isGuest')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card border-info shadow my-5">
                    <div class="card-body p-4">
                        <div class="card shadow bg-info mb-4 ">
                            <div class="card-body text-center">
                                <div class="h5 ">{{ $title }}</div>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form action={{ route('register_action') }} method="POST">
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
                            <div class="mb-3">
                                <label for="password_ulangi" class="form-label">Ulangi Password</label>
                                <input type="password" class="form-control " id="password_ulangi" name="password_ulangi"
                                    placeholder="Ulangi Password" required>
                            </div>
                            <div class="d-grid col-12 mb-3">
                                <button type="submit" class="btn btn-outline-primary">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
