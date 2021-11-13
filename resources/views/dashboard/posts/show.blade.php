@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h3 class="mb-4">{{$post->title}}</h3>

      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back </a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn bg-danger" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span> Delete</button>
      </form>

      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-4" alt="{{ $post->category->name }}">

      <article class="my-3">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>
@endsection