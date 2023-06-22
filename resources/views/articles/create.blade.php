@extends('default')


@section('content')

<h1> Creer un article </h1>

<form action="{{route('articles.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" class="form-control mb-3" name="name" placeholder="Nom article" value="{{old('name')}}" required>
    <textarea name="body" class="form-control mb-3" placeholder="Description article" value="{{old('body')}}"></textarea> 
    
    
    {{ Form::select('user_id', App\Models\User::pluck('name' , 'id'))}}

    <input type="file" name="photo" class="form-control"  >

    @foreach (App\Models\Tag::pluck('name' , 'id') as $id => $tag)
    <label>
        <input type="checkbox" name="tags[]" value="{{$id}}" {{ in_array($id, old('tags', [] )) ? 'checkd' : ''}}>
        {{ $tag }}
    </label>    
    @endforeach
    <button class="btn btn-danger">Valider</button>
</form>
@endsection 