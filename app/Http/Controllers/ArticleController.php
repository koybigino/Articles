<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function landing(){

        // get the popular articles
        $popular_articles = $this->get_popular_articles();

        //get last articles post
        $last_articles = Article::select("*")->orderBy('id', 'desc')->take(5)->get(5)->jsonSerialize();

        return view('welcome', [
            'popular_articles' => $popular_articles,
            'last_articles' => $last_articles
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles =[];
        $links = [];
        $next_page_url = null;
        $prev_page_url = null;
        $current_page = 0;


        $articlesPagination = Article::paginate(10)->jsonSerialize();
        $articles = $articlesPagination['data'];
        $links = $articlesPagination['links'];
        $next_page_url = $articlesPagination['next_page_url'];
        $prev_page_url = $articlesPagination['prev_page_url'];
        $current_page = $articlesPagination['current_page'];

        // get the popular articles
        $popular_articles = $this->get_popular_articles();

        return view('articles.index', [
            'articles' => $articles,
            'links' => $links,
            'prev_page_url' => $prev_page_url,
            'next_page_url' => $next_page_url,
            'current_page' => $current_page,
            'popular_articles' => $popular_articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Article::find($id)->increment('view_count');
        $article = Article::find($id);

        $category = Category::find($article['category_id']);
        
        $similar_articles = $category->articles()->orderBy('view_count', 'desc')->take(5)->get()->jsonSerialize();

        // get the popular articles
        $popular_articles = $this->get_popular_articles();

        return view('articles.show', [
            'article' => $article,
            'similar_articles' => $similar_articles,
            'popular_articles' => $popular_articles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    private function get_popular_articles()
    {
        return $popular_articles = Article::select("*")->orderBy('view_count', 'desc')->take(5)->get()->jsonSerialize();
    }
}
