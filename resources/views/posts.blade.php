@extends('layouts/main')

@section('container')
<h1 class="mb-3">Halaman Blog Posts</h1>
    @foreach($posts as $posts)
    <article class="mb-5">
        <h2><a href="/posts/{{ $posts->id }}">{{ $posts->title }}</a></h2>
        <p>{{ $posts->body }}</p>
    </article>
    @endforeach

@endsection

