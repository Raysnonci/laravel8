@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>

    @foreach ($posts as $post)
        <div class="mb-5">
            <article>
                <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                {{-- <h5>{{ $post['author'] }}</h5> --}}
                <p>{{ $post->excerpt }}</p>
            </article>
        </div>
    @endforeach
@endsection