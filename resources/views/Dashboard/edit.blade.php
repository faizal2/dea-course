@extends('Layout/isUser')
@section('content')
    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1 class="text-center pt-3">{{ $title }}</h1>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card border-info shadow ">
                        <div class="card-body p-4">
                            <form class="mb-2" method="POST" action={{ route('article_add') }}>
                                @csrf
                                <input type="hidden" id="status" name="status" value="Edit">
                                <input type="hidden" id="id" name="id" value={{ $article->id }}>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul</label>
                                    <textarea type="text" class="form-control" id="title" name="title" placeholder="judul" required>{{ $article->title }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="deskripsi" required>{{ $article->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="tag" class="form-label">Tag</label>
                                    <input type="text" class="form-control" id="tag" name="tag"
                                        value={{ $article->tag }} placeholder="tag">
                                </div>
                                <button class="btn btn-outline-success" type="submit">Simpan</button>
                                <a href={{ route('dashboard_index') }} class="btn btn-outline-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
