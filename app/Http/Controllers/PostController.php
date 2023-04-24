<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public function index($locale, $id = null){
        if ($id === null) {
            return redirect()->route("latestNews", ["locale" => App::getLocale()]);
        }
        $post = Post::find($id);
        
        if ($post === null) {
            return App::abort(404);
        }

        $languageId = Language::select("id")->where("short_name", "like", App::getLocale())->first()->id;

        $categories = Category::with("posts")->where("language_id", "=", $languageId)->get();

        $recentlyPosts = Post::with("categories")->where("language_id", "=", $languageId)->latest()->take(4)->get();

        $liked = false;
        if (session()->has('like'.$id)) {
            $liked = true;
        }

        return view("site.post", [
            "post" => $post,
            "categories" => $categories,
            "recently" => $recentlyPosts,
            "liked" => $liked,
        ]);
    }

    public function like($locale, $id){
        if (session()->has('like'.$id)) {
            return redirect()->route("post", ["locale" => $locale, "id" => $id]);
        }
        $post = Post::find($id);
        
        if ($post === null) {
            return App::abort(404);
        }
        $post->likes++;

        if ($post->save()) {
            session(['like'.$id => true]);
        }
        return redirect()->route("post", ["locale" => $locale, "id" => $id]);
    }
}
