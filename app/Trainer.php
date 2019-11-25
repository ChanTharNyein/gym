<?php

namespace App;
use App\Classes;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

	protected $fillable = [
    	'name','image','description','facebook','gmail','instagram'
    ];
    public function posts($value=''){
        return $this->hasMany('App\Post');
    }
    public function orderpackage($value=''){
        return $this->belongsToMany('App\OrderPackage');
    }
    public function classes($value=''){
        return $this->hasMany('App\Classes');
    }
}
