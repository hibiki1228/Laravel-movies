@extends('layouts.app')

@section('content')
  <div class="w-100 d-flex justify-content-between align-items-center flex-column gap-4">
    <div class="w-100 d-flex justify-content-between align-items-end">
      <h2>映画一覧</h2>
      <a
        class="btn border border-primary text-primary"
        href="{{ route('movies.create') }}"
      >
        作成
      </a>
    </div>
    <div>
    <div class="container w-100">
      <div class="row row-cols-auto gap-4 justify-content-center">
        @foreach($movie_infos as $movie_info)
            <a class="col d-flex justify-content-between align-items-center flex-column gap-2" style="text-decoration: none;" href="{{ route('movies.show', ['movie_id' => $movie_info->id]) }}"><img class="rounded" style="width: 304px; height: 228px; object-fit: cover;" src="{{ $movie_info->image_url }}"/></a>

            <h3 class="text-dark">{{ $movie_info->title }}</h3>
            <br>
            <br>

        @endforeach
      </div>
    </div>
  </div>
@endsection
