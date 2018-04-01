<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	protected $table = 'history';
    protected $guarded = [];
    protected $with = ['pola'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function pola(){
    	return $this->belongsTo(Pola::class);
    }
}
