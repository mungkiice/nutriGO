<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'article';
    protected $guarded = [];
    public function show(){
    	$url = Storage::url($this->foto);
    	return "<img src='".$url."'/>";
    }
}
