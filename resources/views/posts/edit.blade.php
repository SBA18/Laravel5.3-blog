@extends('templates.default.default')

@section('title', $title)

@section('content')
    <form method="post" action="{{route('news.update', $post)}}" accept-charset="utf-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{$post->slug}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="online" value="1" checked="{{ $post->online }}"> Online
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection