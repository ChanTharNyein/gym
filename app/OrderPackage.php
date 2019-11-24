<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Package;
use App\Trainer;
class OrderPackage extends Model
{
     protected $fillable = [
        'user_id', 'trainer_id', 'phone','package_id','start_date','end_date','appointment_date','status'
    ];
/*    public function user($value=''){
        return $this->hasMany('App\User');
    }*/
    public function trainer($value=''){
        return $this->belongsTo('App\Trainer');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function package(){
        return $this->belongsTo('App\Package');
    }
}
