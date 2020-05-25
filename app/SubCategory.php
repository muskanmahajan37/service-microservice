<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "subcategories";

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
