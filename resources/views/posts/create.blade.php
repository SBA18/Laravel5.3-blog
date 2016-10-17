@extends('templates.default.default')

@section('title', $title)

@section('content')
    <form method="post" action="{{route('news.store')}}" accept-charset="utf-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" >
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="online" value="1"> Online
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection