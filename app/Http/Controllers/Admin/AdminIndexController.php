<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function index(){

        $posts = Post::with("categories")->select()->get();

        return view('admin.index', [
            "posts" => $posts,
        ]);
    }
}
