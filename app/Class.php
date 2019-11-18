<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
     protected $fillable = [
        'name', 'image', 'description','price','trainer_id'
    ];
}
