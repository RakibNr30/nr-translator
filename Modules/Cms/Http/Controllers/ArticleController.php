<?php

namespace Modules\Cms\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\DataTables\ArticleDataTable;
use Modules\Cms\Http\Requests\ArticleStoreRequest;
use Modules\Cms\Http\Requests\ArticleUpdateRequest;
use Modules\Cms\Services\ArticleService;

class ArticleController extends Controller
{
    /**
     * @var $articleService
     */
    protected $articleService;

    /**
     * Constructor
     *
     * @param ArticleService $articleService
     */
    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * Article list
     *
     * @param ArticleDatatable $datatable
     * @return \Illuminate\View\View
     */
    public function index(ArticleDatatable $datatable)
    {
        return $datatable->render('cms::article.index');
    }

    /**
     * Create article
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('cms::article.create');
    }


    /**
     * Store article
     *
     * @param ArticleStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleStoreRequest $request)
    {
        $data = $request->all();
        $data['author_id'] = auth()->user()->id;
        // create article
        $article = $this->articleService->create($data);
        // upload files
        $article->uploadFiles();
        // check if article created
        if ($article) {
            // flash notification
            notifier()->success('Article created successfully.');
        } else {
            // flash notification
            notifier()->error('Article cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show article.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get article
        $article = $this->articleService->find($id);
        // check if article doesn't exists
        if (empty($article)) {
            // flash notification
            notifier()->error('Article not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::article.show', compact('article'));
    }

    /**
     * Show article.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get article
        $article = $this->articleService->find($id);
        // check if article doesn't exists
        if (empty($article)) {
            // flash notification
            notifier()->error('Article not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::article.edit', compact('article'));
    }

    /**
     * Update article
     *
     * @param ArticleUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ArticleUpdateRequest $request, $id)
    {
        // get article
        $article = $this->articleService->find($id);
        // check if article doesn't exists
        if (empty($article)) {
            // flash notification
            notifier()->error('Article not found!');
            // redirect back
            return redirect()->back();
        }
        $data = $request->all();
        //$data['author_id'] = auth()->user()->id;
        // update article
        $article = $this->articleService->update($data, $id);
        // upload files
        $article->uploadFiles();
        // check if article updated
        if ($article) {
            // flash notification
            notifier()->success('Article updated successfully.');
        } else {
            // flash notification
            notifier()->error('Article cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete article
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get article
        $article = $this->articleService->find($id);
        // check if article doesn't exists
        if (empty($article)) {
            // flash notification
            notifier()->error('Article not found!');
            // redirect back
            return redirect()->back();
        }
        // delete article
        if ($this->articleService->delete($id)) {
            // flash notification
            notifier()->success('Article deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Article cannot be deleted successfully.');
        }
        // redirect back
        return redirect()->back();
    }
}
