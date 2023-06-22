@extends('default')

@section('title')
    Tous les articles
@endsection

@section('content')

<h1 class="title">{{$article->name}}</h1>

<h1>{{$article->body}}</h1>

@endsection 