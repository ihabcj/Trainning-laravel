

<h3> {!! $article->name_marked !!}</h3>
<p>
    <small>
        Publie le : {{ $article->publication }}, par :{{ $article->user->name }}
    </small>
</p>

            {{ $article->name }}
       

<h3> {{ $article->body }} </h3>
    
<a href="{{ route ('articles.show' , [$article, 'user_id' => auth()->id()])}}" class="btn btn-info">see he body</a>