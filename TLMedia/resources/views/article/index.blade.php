@extends('layouts.app')
<link href="{{ asset('css/article.css') }}" rel="stylesheet">

@section('content')
  <div class="container">
    @foreach ($articles as $article)
    <a href="/articles/{{$article->id}}" class="card">
      <div>
        <div class="card-body">
          <h4 class="card-title">{{ $article->title }}</h4>
<!--           <p class="card-text">{{ $article->body }}</p> -->
        </div>
      </div>
      </a>
    @endforeach
  </div>
@endsection