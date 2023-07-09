<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "JUDUL POST PERTAMA",
            "slug" => "judul-post-pertama",
            "author" => "Pratama Reno",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, molestiae quaerat veniam quo saepe incidunt ullam, pariatur
            quia quibusdam maxime dicta est ipsum voluptas asperiores natus illum iste voluptatum delectus?",
        ],
        [
            "title" => "JUDUL POST KEDUA PUNYA RENO GANTENG",
            "slug" => "judul-post-kedua",
            "author" => "Reno Pratama",
            "body" => "Kalau saya dulu suka makan sate kemudian saya, jualan di tiktok tapi tidak dapat hasil, boleh lah sekali sekali
            main ke kampungku banyak ikan ikan pada terbang ke daratan yang sangat luas tapi waktu saya sd perna melihat babi naik motor
            kemudia saya foto tapi lupa saya tidak punya kamera hehehe",
        ]
    ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {

        $posts = static::all();
            //     $blog_posts = self::$blog_posts;
            //     $post = [];
            //     foreach($blog_posts as $po) {
            //     if($po["slug"] === $slug) {
            //         $post = $po;
            //     }
            // }

        return $posts->firstWhere('slug', $slug);

        }
}
