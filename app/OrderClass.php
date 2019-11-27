<?php

namespace App;
use App\User;
use App\Classes;
use Illuminate\Database\Eloquent\Model;

class OrderClass extends Model
{
    protected $fillable = [
        'user_id', 'phone','class_id','appointment_date','start_date','end_date','month','status'
    ];
    public function user($value=''){
        return $this->belongsTo('App\User');
    }
    public function class($value=''){
        return $this->belongsTo('App\Classes');
    }
}
