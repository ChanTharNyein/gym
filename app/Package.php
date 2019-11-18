<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable = [
        'title', 'price', 'service1','service2','service3','service4','service5'
    ];
}
