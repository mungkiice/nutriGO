<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $table = 'user';
	protected $guarded = [];
	protected $with = ['history'];
	public function history(){
		return $this->hasMany(History::class);
	}
	public function getRememberTokenName(){
		return null;
	}
}
