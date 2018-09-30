@extends('app.layout')

@section('content')
  <div class="container">
    @foreach ($articles as $article)
      <div>
        <div class="card-body">
          <h4 class="card-title">{{ $article->title }}</h4>
<!--           <p class="card-text">{{ $article->body }}</p> -->
        </div>
      </div>
@endsection