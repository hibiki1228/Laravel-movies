@extends('layouts.app')

@section('content')
  <div class="w-100 d-flex justify-content-between align-items-center flex-column gap-4">
    <div class="w-100 d-flex justify-content-between align-items-end">
      <h1>{{ $movie_info->title }}</h1>
      <nav class="d-flex justify-content-center align-items-center gap-2">
        <a
          class="btn border border-primary text-primary"
          href="{{ route('movies.edit', ['movie_id' => $movie_info->id]) }}"
        >
          編集
        </a>
        <a href="{{ route('movies.delete', ['movie_id' => $movie_info->id]) }}">削除</a>
      </nav>
    </div>
    <img
      class="w-100 rounded"
      style="max-width: 600px;"
      src="{{ $movie_info->image_url }}"
    />
  </div>
@endsection
