<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    
	protected $fillable = [
    	'name','image','description','facebook','gmail','instagram'
    ];
}
