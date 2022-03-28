@extends('layouts.app')

@section('content')
  <div class="w-100 d-flex flex-column gap-4">
    <h1>Edit</h1>
    <div class="w-100 d-flex justify-content-center align-items-center">
      <form action="{{ route('movies.store', ['post_data' => $movie_info]) }}" method="post">
            @csrf
            @error('content')
                {{ $message }}
                <br>
            @enderror
            <input type="hidden" name="id" value="{{ $movie_info->id }}">
            <textarea name="content"  cols="30" rows="5">{{ $movie_info->title }}</textarea>
            <textarea name="content"  cols="30" rows="5">{{ $movie_info->image_url }}</textarea>
            <input type="submit" value="保存">
        </form>
    </div>
  </div>
@endsection
