<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(typeArticle::class, "type_article_id", "id"); //on peut spesifier la clé etrangere apres avoir dis dans quelle table nous pointons: $this->belongsTo(typeArticle::class, "type_article_id");
    }
    public function tarifications(){
        return $this->hasMany(Tarification::class); //on peut spesifier la clé etrangere apres avoir dis dans quelle table nous pointons: $this->belongsTo(typeArticle::class, "type_article_id");
    }

    public function locations(){
        return $this->belongsToMany(Location::class,"article_location","article_id","location_id"); //on peut spesifier la clé etrangere apres avoir dis dans quelle table nous pointons: $this->belongsTo(typeArticle::class, "type_article_id");
    }
    public function propriete_articles(){
        return $this->belongsToMany(ProprieteArticle::class,"article_propriete", "article_id", "propriete_article_id");
    }
}
