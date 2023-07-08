<?php

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
    return view('home',[
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Kuma Builder",
        "email" => "kuma@gmail.com"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "JUDUL POST PERTAMA",
            "slug" => "judul-post-pertama",
            "author" => "Pratama Reno",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, molestiae quaerat veniam quo saepe incidunt ullam, pariatur
            quia quibusdam maxime dicta est ipsum voluptas asperiores natus illum iste voluptatum delectus?",
        ],
        [
            "title" => "JUDUL POST KEDUA",
            "slug" => "judul-post-kedua",
            "author" => "Reno Pratama",
            "body" => "Kalau saya dulu suka makan sate kemudian saya, jualan di tiktok tapi tidak dapat hasil, boleh lah sekali sekali
            main ke kampungku banyak ikan ikan pada terbang ke daratan yang sangat luas tapi waktu saya sd perna melihat babi naik motor
            kemudia saya foto tapi lupa saya tidak punya kamera hehehe",
        ],
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('/posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "JUDUL POST PERTAMA",
            "slug" => "judul-post-pertama",
            "author" => "Pratama Reno",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, molestiae quaerat veniam quo saepe incidunt ullam, pariatur
            quia quibusdam maxime dicta est ipsum voluptas asperiores natus illum iste voluptatum delectus?",
        ],
        [
            "title" => "JUDUL POST KEDUA",
            "slug" => "judul-post-kedua",
            "author" => "Reno Pratama",
            "body" => "Kalau saya dulu suka makan sate kemudian saya, jualan di tiktok tapi tidak dapat hasil, boleh lah sekali sekali
            main ke kampungku banyak ikan ikan pada terbang ke daratan yang sangat luas tapi waktu saya sd perna melihat babi naik motor
            kemudia saya foto tapi lupa saya tidak punya kamera hehehe",
        ],
    ];
    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

