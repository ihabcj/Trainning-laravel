<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Article;
use Str;

class ArticleController extends Controller

{

    public function index()
    {
        //return DB::table('articles')->get();
        
        $articles = Article::rechercher()
                            //->where('user_id', auth()->id())
                            ->with('user')
                            ->orderBy('id','desc')->
                            get();
        //return view('articles.index', ['articles' => $articles]);
        return view('articles.index', compact('articles'));
    }
    public function create()
    {
        return view('articles.create');
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=> 'required|min:5|unique:articles,name',
            'body'=> 'required',
            'user_id'=> 'required',
            'photo'=> 'required|image'
        ]);

        $request->photo->store('photo');

        $article = Article::create(request()->all() + ['photo' => $request->photo->store('photo')]);

        $article->tags()->attach(request('tags'));

        return redirect()->route('articles.show', $article)
                        ->withsuccess("thank you for the creation");
    }
    public function update()
    {
        Article::where('id', 1)->update([
            'name' => 'nom article modifie',
            'body' => 'body article modifie',
        ]);
    }
    public function delete()
    {
        Article::delete(1);
        //Article::whereBetween('id',[30,40])->delete();
    }
}
