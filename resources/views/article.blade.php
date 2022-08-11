@extends('Layout/isGuest')

@section('content')
    <main class="container pt-5">
        <div class="bg-light p-5 rounded">
            <h3 class="text-center pt-3">{{ $article->title }}</h3>
            <hr>
            <div>
                <p>{{ $article->description }}</p>
                <a href="#" class="nav-link"><i>{{ $article->tag }}</i></a>
            </div>
        </div>
        <a class="btn btn-outline-secondary mt-3" href="/">KEMBALI</a>
    </main>
@endsection
