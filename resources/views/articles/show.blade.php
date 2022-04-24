@extends('layout.app')

@section('content')
    <div class="article">
        <div class="alert alert-primary mb-0 rounded-0"><h1 class="text-center fs-1 fw-bolder text-primary text-uppercase">{{ $article['name_article'] }}</h1></div>
        <img src="{{ asset($article['image_path'])}}" class="w-100">
        <div class="alert alert-secondary h6 py-5 rounded-0">{{ $article['description'] }}</div>
    </div>
    <div class="row" style="margin-top: 7rem;">
        <h2 class="text-dart text-center fw-bold">Articles similaires</h2>
        @foreach ($similar_articles as $art)
            @if ($art['id'] !== $article['id'])
                <a href="/articles/{{ $art['id'] }}" class="col-md-3 col-6 text-bold text-capitalize mb-5 text-decoration-none">
                    <div class="card w-100">
                        <img src="{{ asset($art['image_path']) }}" alt="" srcset="">
                        <div class="card-body">
                        <p class="card-text text-center">{{ $art['name_article'] }}</p>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
@endsection