<?php

namespace App;
use App\Trainer;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
     protected $fillable = [
        'name', 'image', 'description','price','trainer_id','start','end'
    ];
    public function trainer($value=''){
        return $this->belongsTo('App\Trainer');
    }
}
