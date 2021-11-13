@extends('layouts.main')

@section('container')

  <h1 class="text-center">{{ $title }}</h1>

  <div class="row justify-content-center mt-3 mb-5">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-warning" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden; width:100%; height:400px;">
          <img src="{{ asset('storage/'. $posts[0]->image)  }}" class="card-img-top img-fluid" alt="{{ $posts[0]->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400? {{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif

      <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <h5>
          <small class="text-muted">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </h5>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-warning text-decoration-none">Read More</a>
      </div>
    </div>
  

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mt-3">
            <div class="card">
              <div class="position-absolute px-3 py-2 text-light" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">{{ $post->category->name}}</a></div>
              @if ($post->image)
                <img src="{{ asset('storage/'. $post->image)  }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
              @else
                <img src="https://source.unsplash.com/400x250? {{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
              @endif
              
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p>
                  <small class="text-muted">
                    By. <a href="/posts?autor={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-warning">Read More..</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    @else
    <p class="text-center fs-4">No Posts Found.</p>
    @endif

    <div class="d-flex justify-content-end mt-5">
      {{ $posts->links() }}
    </div>

@endsection

