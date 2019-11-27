<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeForm extends Model
{
    protected $fillable = [
        'name', 'email', 'phone'
    ];
}
