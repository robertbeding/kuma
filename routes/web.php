<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Kuma Builder",
        "email" => "kuma@gmail.com"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "active" => 'contact'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
//halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => "Post Categories",
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}',
    function (Category $category) {
    $categories = Category::withCount('posts')->get();
    return view('posts', [
        'title' => "Post By Category: $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
        'categories' => $categories
    ]);
});


Route::get('/authors/{username}', function ($username) {
    $author = User::where('username', '=', $username)->with('posts')->first();
    $categories = Category::withCount('posts')->get();
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
        "active" => 'author',
        'categories' => $categories
    ]);
});
