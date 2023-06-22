@extends('default')

@section('content')

<table id="myTable">
    <thead>
        <tr>
            <td> #</td>
            <td> Nom</td>
            <td> Email </td>
            <td> Nombre article</td>
        </tr> 
    </thead>
    <tbody>       
        @foreach ($user as $use)
            <tr>
                <td>{{ $use->id}}</td>
                <td>{{ $use->name}}</td>
                <td>{{ $use->email}}</td>
                <td>{{ $use->articles_count }}</td>
            </tr>    
        @endforeach   
    </tbody>     
    </table>   

@endsection