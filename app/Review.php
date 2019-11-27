<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = [
    	'description','user_id'
    ];
    public function user($value=''){
        return $this->belongsTo('App\User');
    }
}
