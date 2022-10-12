<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeArticle extends Model
{
    use HasFactory;

    protected $table = "types_articles";

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
