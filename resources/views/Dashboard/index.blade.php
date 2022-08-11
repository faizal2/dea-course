@extends('Layout/isUser')
@section('content')
    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1 class="text-center pt-3">{{ $title }}</h1>
            <hr>
            @if (session()->get('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card p-3 shadow">
                <div>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#modalArticle">
                        Buat Artikel
                    </button>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-border table-sm border">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Tag</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->description }}</td>
                                <td>{{ $article->tag }}</td>
                                <td class="text-center">
                                    <div><a class="btn btn-sm btn-outline-primary"
                                            href="/article/edit/{{ $article->id }}">Edit</a>
                                        <form class="mt-1" action="{{ route('article_delete') }}" method="POST">
                                            @csrf
                                            <input class="form-control" type="hidden" name="id"
                                                value="{{ $article->id }}">
                                            <button class="btn btn-sm btn-outline-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="modalArticle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalArticleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalArticleLabel">Buat Artikle Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action={{ route('article_add') }}>
                        @csrf
                        <input type="hidden" id="status" name="status" value="Add">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <textarea type="text" class="form-control" id="title" name="title" placeholder="judul" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea type="text" class="form-control" id="description" name="description" placeholder="deskripsi" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <input type="text" class="form-control" id="tag" name="tag" placeholder="tag">
                        </div>
                        <button class="btn btn-outline-success" type="submit">Simpan</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
