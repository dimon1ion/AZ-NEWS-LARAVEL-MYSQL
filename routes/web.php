<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [IndexController::class, "index"])->name("index");

// Route::get("/{locale}", function (string $locale){

//     if (! in_array($locale, ['en', 'ru'])) {
//         abort(400);
//     }

//     App::setlocale($locale);

//     Route::get('/', [IndexController::class, "index"])->name("index");

// });

// Route::prefix('/{locale?}')->group(function ($locale = null){
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }
//     // App::setLocale($locale);
//     Route::get('/', [IndexController::class, "index"])->name("index");
// });

// Route::get('/{locale?}', function ($locale = null){
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }
//     return view('site.index');
// });


Route::prefix('/{locale?}')->middleware('locale')->group(function() {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/', [IndexController::class, "index"])->name("index");
    Route::get('/latest-news', [NewsController::class, "latestNews"])->name("latestNews");
    Route::get('/category/{id?}', [NewsController::class, "categoryNews"])->name("categoryNews");
    Route::post('/search', [NewsController::class, "searchNews"])->name("searchNews");
    Route::get('/about', [AboutController::class, "index"])->name("about");
    Route::get('/contact', [ContactController::class, "index"])->name("contact");
    Route::get('/post/{id?}', [PostController::class, "index"])->name("post");
    Route::get('/like/{id?}', [PostController::class, "like"])->name("like");

    

    Route::middleware('auth')->prefix("adminka")->group(function () {
        Route::get('/', [AdminIndexController::class, "index"])->name('adminka');
        Route::get('/add-post', [AdminPostController::class, "addPostPage"])->name('addPostPage');
        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
