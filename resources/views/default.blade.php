<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <ul>
        <li><a href=""> Accueil </a></li>
        <li><a href="{{route('articles.index')}}"> Article </a></li>
    </ul>
<div class="container">

        @include('inc.messages')
        @yield('content')
</div>


<script src="/js/cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="/js/cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"> </script>
<script>
    let table = new DataTable('#myTable');
</script>    

</body>
</html>