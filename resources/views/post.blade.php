@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <article>
            <h2><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h2>
            {{-- <h5>{{ $post['author'] }}</h5> --}}
            <p>{{ $post->body }}</p>
        </article>
    </div>
    <a href="/blog">Back to the blog</a>
@endsection