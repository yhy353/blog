<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  // protected $article;
  //
  // public function __construct(ArticleRepository $article)
  // {
  //     $this->article = $article;
  // }

  /**
   * Display the articles resource.
   *
   * @return mixed
   */
  public function index()
  {
      $articles = Article::orderBy("published_at","desc")->paginate(15);
      return view('article.index', compact('articles'));
  }

  /**
   * Display the article resource by article slug.
   *
   * @param  string $slug
   * @return mixed
   */
  public function show($slug)
  {
      $article = $this->article->getBySlug($slug);

//        $article->content = collect(json_decode($article->content))->get('html');

      return view('article.show', compact('article'));
  }
}
