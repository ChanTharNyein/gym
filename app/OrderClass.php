<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderClass extends Model
{
    protected $fillable = [
        'user_id', 'trainer_id', 'phone','class_id','start_date','end_date','status'
    ];
}
