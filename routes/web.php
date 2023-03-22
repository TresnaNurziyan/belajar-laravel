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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Tresna Nurziyan",
        "email" => "tresna.nurziyan@gmail.com",
        "image" => "lombok 1.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tresna Nurziyan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sapiente nobis consequuntur fugit blanditiis dignissimos, iure nihil perferendis, 
            nostrum impedit, sunt minus vitae dolore voluptatum soluta similique neque non!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tamara Maldini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sapiente nobis consequuntur fugit blanditiis dignissimos, iure nihil perferendis, 
            nostrum impedit, sunt minus vitae dolore voluptatum soluta similique neque non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sapiente nobis 
            consequuntur fugit blanditiis dignissimos, iure nihil perferendis, nostrum impedit, sunt minus vitae dolore voluptatum soluta similique neque non!"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tresna Nurziyan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sapiente nobis consequuntur fugit blanditiis dignissimos, iure nihil perferendis, 
            nostrum impedit, sunt minus vitae dolore voluptatum soluta similique neque non!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tamara Maldini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sapiente nobis consequuntur fugit blanditiis dignissimos, iure nihil perferendis, 
            nostrum impedit, sunt minus vitae dolore voluptatum soluta similique neque non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sapiente nobis 
            consequuntur fugit blanditiis dignissimos, iure nihil perferendis, nostrum impedit, sunt minus vitae dolore voluptatum soluta similique neque non!"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
