<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    protected $fillable=["name"];

    public function goods(){
        return $this->hasMany(Goods::class,"kind_id");
    }
}
