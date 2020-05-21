<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $guarded = [];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
//    public function users(){
//        return $this->belongsTo(User::class);
//    }
}
