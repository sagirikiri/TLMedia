@extends('layouts.app')
<link href="{{ asset('css/article.css') }}" rel="stylesheet">

@section('content')
  <div class="container">
      <div>
        <div class="card-body">
          <h4 class="card-title">{{ $article->title }}</h4>
          <p class="card-text">{{ $article->body }}</p>
        </div>
      </div>
  </div>
@endsection