<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pola extends Model
{
	protected $table = 'pola';
    protected $guarded = [];
    // protected $appends = ['makanan'];
    protected $with = ['makanan'];
    public function makanan(){
    	return $this->belongsToMany(Makanan::class, 'pola_makan');
    }
}
