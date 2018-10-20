<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable=["name","price","intro","shelf","show","kind_id"];

    public function kind(){
        return $this->belongsTo(Kind::class,"kind_id");
    }
}
