@extends('templates.default.default')

@section('title', $title)

@section('content')
    @foreach($posts as $post)
        <h3><a href="{{ route('news.show', $post) }}">{{ $post->title }}</a></h3>
        <p><em>create by : Sawers at {{ $post->created_at->diffForHumans() }}</em></p>
        @if($post->category)
            <p><em>{{ $post->category->name }}</em></p>
         @endif

        <p>{{ $post->content }}</p>
        <p><a href="{{ route('news.edit', $post) }}" class="btn btn-primary">Edit</a></p>
    @endforeach
@endsection