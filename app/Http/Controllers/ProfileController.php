<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function showUser(){
        $user = User::all();
        // $articles = Article::get();
        return view('AdminDashboard', compact('user'));
    }
    public function showProfile($id){
    	$user = User::find($id);
    	return view('Profile', compact('user'));
    }
    public function showUserHistory($id){
        $user = User::find($id);
        $history = $user->history()->first();
        return view('Profile', compact(['user', 'history']));
    }
    public function deleteProfile($id){
    	$user = User::find($id);
    	$user->delete();
    	return back()->with('flash', 'Member Berhasil Dihapus');
    }
}
	