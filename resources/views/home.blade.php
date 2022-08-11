@extends('Layout/isGuest')

@section('content')
    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1 class="text-center pt-3">{{ $title }}</h1>
            <hr>
            <div class="row ">
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                        <div class="card shadow border-info m-1 h-100 ">
                            <a class="nav-link" href="/article/{{ $article->id }}">
                                <div class="card-body ">
                                    <div class="h6 text-break">{{ $article->title }}</div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
