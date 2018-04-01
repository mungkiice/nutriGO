<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Validator;

class UpdatePasswordController extends Controller
{
	public function showUpdatePasswordForm(){
		return view('UpdatePassword');
	}
	public function updatePassword(Request $request){
		$user = Auth::user();
		Validator::extend('password_valid', function($field, $value, $parameters){
			return Hash::check($value, $user->password);
		});
		$messages = array(
			'password_valid' => 'Password Lama Salah'
		);
		$rules = array(
			'oldPassword' => 'password_valid',
			'newPassword' => 'confirmed|min:6|different:OldPassword',
		);
		$this->validate($request, $rules, $messages);
		$user->update('password', bcrypt($request->password));
		return redirect('/profile/'. $user->id);
	}
}
