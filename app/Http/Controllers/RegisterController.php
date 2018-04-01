<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
	public function showRegistrationForm()
    {
    	//mengembalikan halaman form register
        return view('Register');
    }
	public function register(Request $request) {
		//validasi input user
		$this->validate($request, [
			'nama' => 'required',
			'email' => 'required|unique:user',
			'password' => 'required|min:6|confirmed',
			'gender' => 'required',
			'tinggi_badan' => 'required',
			'berat_badan' => 'required',
			'usia' => 'required'
		]);
		//membuat akun user sesuai inputan
		$user = User::create([
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'gender' => $request->gender,
			'tinggi_badan' => $request->tinggi_badan,
			'berat_badan' => $request->berat_badan,
			'usia' => $request->usia,
		]);
		//kembali ke halaman home
		return redirect('/home');
	}
}
