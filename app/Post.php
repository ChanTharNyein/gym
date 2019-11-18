<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
    'title','image','description','trainer_id','category_id'
	];
}
