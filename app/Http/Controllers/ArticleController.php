<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
class ArticleController extends Controller
{
    public function index(){
    	$articles = Article::get();
    	return view('Home', compact('articles'));
    }
    public function showArticleTable(){
        // $user = User::all();
    	$articles = Article::get();
    	return view('AdminDashboard', compact(['articles', 'user']));
    }
    //Buat Artikel dari Admin
    public function showInsertArticleForm(){
    	return view('BuatArtikel');
    }
    public function addArticle(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required'
        ]);
        $path = $request->foto->store('article', 'public');
        Article::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
        ]);
        return redirect('/admin');
    }
    public function showUpdateArticleForm($id){
        $article = Article::find($id);
        return view('UpdateArtikel', compact('article'));
    }
    public function showDetail($id){
        $article = Article::find($id);
        return view('DetailArtikel', compact('article'));
    }
    public function deleteArticle($id){
        $article = Article::find($id); 
    	$article->delete();
    	return back();
    }
    public function updateArticle($id, Request $request){
        $article = Article::find($id);
        $path = $request->foto->store('article', 'public');
        $article->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
        ]);
        return redirect('/admin');
    }
}
