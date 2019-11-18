<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPackage extends Model
{
     protected $fillable = [
        'user_id', 'trainer_id', 'phone','package_id','appointment_date'
    ];
}
