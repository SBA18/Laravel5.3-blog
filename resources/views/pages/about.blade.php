@extends('templates.default.default')

@section('title', $title)
@section('sidebar')
    @parent
    <h3> About Sidebar</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut beatae corporis ipsum minima nam neque vero voluptates? Alias, in tenetur. Accusamus accusantium doloribus explicabo hic iusto nemo possimus quae.</p>
@endsection
@section('content')
<h1>{{ $title }}</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam consequuntur corporis, deleniti dolorem eius est fuga, ipsa laborum minima nihil nisi perspiciatis quasi qui quia quidem rerum voluptates voluptatum!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A itaque maiores minus perspiciatis quo veniam vero. Accusamus at aut distinctio minima modi quibusdam repellat totam! Delectus molestiae obcaecati reprehenderit veniam?
    </p>
@endsection