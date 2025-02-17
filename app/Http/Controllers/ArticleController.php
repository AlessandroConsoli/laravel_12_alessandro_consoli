<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Container\Attributes\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all(); //per recuperare tutti gli articoli dal DB

        return view('article.index', compact('articles')); //01:48:00
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'user_id' => $request->user()->id  //02:28:42
        ]);

        if ($request->file('img')) {
            
            $article->img = $request->file('img')->store('img', 'public');
            $article->save();

        }

        return redirect(route('article.create'))->with('successMessage', "Hai inserito l'articolo correttamente!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'body' => $request->body,
        ]);

        if ($request->file('img')) {
            Storage::delete($article->img, 'public');
            $article->update([
                'img' => $request->file('img')->store('img', 'public')
            ]);
        }
        return redirect(route('article.show', compact('article')))->with('successMessage', 'Articolo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('article.index'))->with('successMessage', "Articolo eliminato dall'archivio");
    }
}
