<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontArticleController extends Controller
{

    public function index()
    {

        $keyword = request()->keyword;
        if ($keyword) {
            $articles = Article::with('Category')
            -> whereStatus(1)
            -> where('title', 'like','%'.$keyword.'%')
            -> latest()
            -> paginate(6);
        } else {
            $articles = Article::with('Category')->whereStatus(1)->latest()->paginate(6);
        }

        return view('front.article.index',[
            'articles' => $articles,
            'keyword' => $keyword,
            ]);
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrfail();
        $article->increment('views');
        return view('front.article.show',[
            'article' => $article,

        ]);
    }
}
