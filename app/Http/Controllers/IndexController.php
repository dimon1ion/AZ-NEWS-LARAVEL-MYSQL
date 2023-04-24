<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(){

        $languageId = Language::select("id")->where("short_name", "like", App::getLocale())->first()->id;

        $trend = Post::with("categories")->
            where("language_id", "=", $languageId)->
            whereRaw("DATEDIFF(CURDATE(), created_at) <= 7")->
            orderBy("likes", "desc")->
            get();

        $all = Post::with("categories")->
            where("language_id", "=", $languageId)->
            latest()->
            take(4)->
            get();
        $categories = Category::with("posts")->
            where("language_id", "=", $languageId)->
            get();

        return view("site.index", [
            "trend" => $trend,
            "all" => $all,
            "categories" => $categories,
            "languageId" => $languageId,
        ]);
    }
}
