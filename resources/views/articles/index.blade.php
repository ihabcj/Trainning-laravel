@extends('default')

@section('title')
    Tous les articles
@endsection


@section('content')
    <form action="" class="form-inline">
        <input type="search" class="form-control" name="q" value="{{ request('q')}}">
        <button class="btn btn-success">Search</button>
    </form>

    <h1>All articles</h1>
    @each('articles._single', $articles , 'article') 

    

@endsection