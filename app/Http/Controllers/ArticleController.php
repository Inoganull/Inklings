<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', [
        'articles' => Article::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString(), 
        ]);
    }

    public function detail(Article $article)
    {
        return view('articles.detail', ['article' => $article]);
    }
}
