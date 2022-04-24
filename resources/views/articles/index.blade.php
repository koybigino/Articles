@extends('layout.app')

@section('content')
    @foreach ($articles as $article)
    <div class="mb-4">
        <a href="/articles/{{ $article['id'] }}" class="text-decoration-none"><h2 class="text-primary mb-2 fs-2 fw-bold  text-capitalize text-center">{{ $article['name_article'] }}</h2></a>
        <div class="my-2 card">
            <div class="row card-body">
                <div class="col-md-3">
                    <img src="{{ asset($article['image_path']) }}" class="w-100">
                </div>
                <div class="col-md-9">
                    <h6 class="text-dart text-wrap">{{ $article['description'] }}</h6>
                </div>
            </div>
          </div>
    </div>
    @endforeach
    <div class="row justify-content-center m-5">
        <div class="col-md-10">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $prev_page_url === null ? 'disabled' :'' }}"><a class="page-link" href={{ $prev_page_url }}>Previous</a></li>
                
                @for ($i=1; $i < count($links) -1 ; $i++)
                    <li class="page-item {{ $current_page === $i ? 'active' : '' }}"><a href={{ $links[$i]['url']}} class="page-link" >{{ $i }}</a></li>
                @endfor
                <li class="page-item {{ $next_page_url === null ? 'disabled' :'' }}"><a class="page-link" href={{ $next_page_url }}>Next</a></li>
            </ul> 
        </div>
    </div>
@endsection