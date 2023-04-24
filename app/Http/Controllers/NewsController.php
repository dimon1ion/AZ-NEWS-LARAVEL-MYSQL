<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function latestNews(){

        $languageId = Language::select("id")->where("short_name", "like", App::getLocale())->first()->id;

        $posts = Post::with("categories")->where("language_id", "=", $languageId)->latest()->paginate(2);


        $categories = Category::with("posts")->where("language_id", "=", $languageId)->get();

        return view("site.news", [
            "posts" => $posts,
            "categories" => $categories,
            "recently" => $posts,
        ]);
    }

    public function categoryNews($locale, $id = null){

        $languageId = Language::select("id")->where("short_name", "like", App::getLocale())->first()->id;

        // $posts = Post::with("categories")->where("language_id", "=", $languageId)
        //     ->latest()->paginate(10);

        // $posts = DB::table('posts')
        //         ->join("posts_categories", "posts.id", "=", "posts_categories.post_id")
        //         ->join("categories", "posts_categories.category_id", "=", "categories.id")
        //         ->where("categories.id", "=", $id)
        //         ->select('posts.*', "categories.name")->paginate(10);

        $posts = Post::join('posts_categories', 'posts.id', '=', 'posts_categories.post_id')
            ->join('categories', 'posts_categories.category_id', '=', 'categories.id')
            ->where("categories.id", "=", $id)->paginate(10);

        

        // $posts = Post::with("categories")->where("language_id", "=", $languageId)
        //     ->latest()->paginate(10);


        // $posts = Post::join()->where("language_id", "=", $languageId)->latest()->get();

        $recentlyPosts = Post::with("categories")->where("language_id", "=", $languageId)->latest()->take(4)->get();
        $title = Category::select("name")->where("id", "=", $id)->first()->name ?? "Empty";

        $categories = Category::with("posts")->where("language_id", "=", $languageId)->get();

        return view("site.news", [
            "posts" => $posts,
            "title" => $title,
            "categories" => $categories,
            "recently" => $recentlyPosts,
        ]);
    }

    public function searchNews(Request $request){

        $text = $request->text;

        $languageId = Language::select("id")->where("short_name", "like", App::getLocale())->first()->id;

        $posts = Post::with("categories")->where("language_id", "=", $languageId)->where("title", "like", "%".$text."%")->latest()->paginate(10);

        $recentlyPosts = Post::with("categories")->where("language_id", "=", $languageId)->latest()->take(4)->get();

        $categories = Category::with("posts")->where("language_id", "=", $languageId)->get();

        return view("site.news", [
            "posts" => $posts,
            "title" => $text ?? "Empty",
            "categories" => $categories,
            "recently" => $recentlyPosts,
        ]);
    }
}
