
@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h3 class="mb-4">{{$post->title}}</h3>

        <h5>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">

        <article class="my-3">
          {!! $post->body !!}
        </article>

        <a href="/posts" class="d-block mt-4">Back To Post</a>
      </div>
    </div>
  </div>
  
@endsection

