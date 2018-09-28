@extends('layouts.app')

@section('content')
    @foreach ($articles as $article)
    <div class="card mb-2">
      <div class="card-body">
        <h4 class="card-header">{{ $article->title }}</h4>
        <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
        <p class="card-body">{{ $article->body }}</p>
      </div>
    </div>
    @endforeach
@endsection