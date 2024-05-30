<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $Article;
    public function __construct(){
        $this->Article=new Article();
    }
    public function index()
    {
        $response['Article']= $this->Article->all();
        return view('articles.index')->with($response);
    }

    /**
     * Show the form for creating anew resource.
     */
    public function creation()
    {
        return view('articles.creation');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->Article->create($request->all());
        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function detail(string $id)
    {
        $commentaires=Commentaire::all()->where('article_id',$id);
        $article=Article::find($id);
        return view('articles.detail',compact('article','commentaires'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $response['articles']=$this->Article->find($id);
       return view('articles.modif')->with($response);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
      $article=$this->Article->find($id);
      $article->update(array_merge($article->toArray(),$request->toArray()));
      return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article=$this->Article->find($id);
        $article->delete();
        return redirect('articles');
    }
}
