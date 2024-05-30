<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Symfony\Component\HttpFoundation\Request;



class CommentaireController extends Controller
{
   
    public function index($id)
    {
        $response=Commentaire::find($id);
        return view('article.detail',compact('response'));
    }

    /**
     * Show the form for creating anew resource.
     */
    public function creation(Request $request)
    {
        Commentaire::create($request->all());
     return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function edit($article_id,$id)
    {
      //dd($article_id);
      $reponse=Commentaire::findOrFail($id);

      return view('commentaires.EditeComm',compact('reponse', 'article_id' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
 
     * Update the specified resource in storage.
     */
    public function updateCommentaire(Request $request, $article_id ,$id)
    {
        $commentaire=Commentaire::find($id);
        $commentaire->update(array_merge($commentaire->toArray(),$request->toArray()));
       
        return redirect()->route('articles.detail', $article_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $commentaire=Commentaire::find($id);
      $commentaire->delete();
      return back();
    }
}