@extends('layouts.app')

@section('content')

<h1 class='mb-10 text-2x1'>Movies</h1>

<form method='GET' action="{{ route('movies.index')}}" class="mb-4 flex items-center space-x-2">
    <input type="text" name="title" placeholder="Search by title"
    value="{{request('title')}}" class='input h-10'/>
    <button type='submit' class='btn h-10'>Search</button>
    <a href="{{ route('movies.index') }}" class="btn h-10">Clear</a>
</form>

<ul>
    @forelse ($movies as $movie)
    <li class="mb-4">
        <div class="movie-item">
            <div
      class="flex flex-wrap items-center justify-between">
      <div class="w-full flex-grow sm:w-auto">
        <a href="{{ route('movies.show', $movie) }}" class="movie-title">{{ $movie->title }}</a>
        <span class="movie-author">by {{ $movie->director }}</span>
      </div>
      <div>
        <div class="movie-rating">
          {{ number_format($movie->reviews_avg_rating, 1) }}
        </div>
        <div class="movie-review-count">
          out of {{ $movie->reviews_count }} {{ Str::plural('review', $movie->reviews_count) }}
        </div>
      </div>
    </div>
  </div>
</li>
    @empty
    <li class="mb-4">
        <div class="empty-movie-item">
            <p class="empty-text">No Movies Found</p>
            <a href="{{ route('movies.index') }}" class="reset-link">Reset criteria</a>
        </div>
    </li>
    @endforelse
</ul>

@endsection