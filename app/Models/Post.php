<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categories(){

        return $this->belongsToMany(Category::class, "posts_categories", "post_id", "category_id");
    }

    public function language(){
        return $this->belongsTo(Language::class, "language_id", "id");
    }
}
