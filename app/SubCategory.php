<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $guarded = [];
    protected $table = "subcategories";

    public function categories(){
        return $this->belongsTo(Category::class);

    }
}
