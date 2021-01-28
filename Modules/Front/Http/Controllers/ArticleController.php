<?php

namespace Modules\Front\Http\Controllers;
;
use Illuminate\Routing\Controller;
use Modules\Cms\Services\ArticleService;

class ArticleController extends Controller
{
    private $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        $articleList = $this->articleService->all(10);
        return view('front::article.index', compact('articleList'));
    }

    public function show($slug)
    {
        $article = $this->articleService->findBy("slug", $slug);
        return view('front::article.show', compact('article'));
    }

}
