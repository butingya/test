<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=["title","auhtor","content","category_id"];

    public function category(){
        return $this->belongsTo(Category::class,"category_id");
    }
}