<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
