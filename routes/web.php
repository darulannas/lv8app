<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Darul Annas",
        "email" => "darulannas7@gmail.com",
        "image" => "profil-image.jpeg"
    ]);
});



Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Darul",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad qui facilis quis laboriosam omnis, molestias, dolores ab distinctio modi consectetur eius facere asperiores beatae nam atque. Doloremque necessitatibus incidunt quo doloribus ut eveniet quae ducimus autem ab corporis deleniti praesentium, nemo, explicabo laboriosam voluptates neque excepturi similique veritatis? Nam iste quae saepe sapiente perspiciatis incidunt iusto cupiditate cum debitis. Perspiciatis ab ratione excepturi voluptatem suscipit ullam neque deleniti veniam, vero eligendi et doloribus a odio dolor quo in repellendus eveniet!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Annas",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad qui facilis quis laboriosam omnis, molestias, dolores ab distinctio modi consectetur eius facere asperiores beatae nam atque. Doloremque necessitatibus incidunt quo doloribus ut eveniet quae ducimus autem ab corporis deleniti praesentium, nemo, explicabo laboriosam voluptates neque excepturi similique veritatis? Nam iste quae saepe sapiente perspiciatis incidunt iusto cupiditate cum debitis. Perspiciatis ab ratione excepturi voluptatem suscipit ullam neque deleniti veniam, vero eligendi et doloribus a odio dolor quo in repellendus eveniet!"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Darul",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad qui facilis quis laboriosam omnis, molestias, dolores ab distinctio modi consectetur eius facere asperiores beatae nam atque. Doloremque necessitatibus incidunt quo doloribus ut eveniet quae ducimus autem ab corporis deleniti praesentium, nemo, explicabo laboriosam voluptates neque excepturi similique veritatis? Nam iste quae saepe sapiente perspiciatis incidunt iusto cupiditate cum debitis. Perspiciatis ab ratione excepturi voluptatem suscipit ullam neque deleniti veniam, vero eligendi et doloribus a odio dolor quo in repellendus eveniet!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Annas",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad qui facilis quis laboriosam omnis, molestias, dolores ab distinctio modi consectetur eius facere asperiores beatae nam atque. Doloremque necessitatibus incidunt quo doloribus ut eveniet quae ducimus autem ab corporis deleniti praesentium, nemo, explicabo laboriosam voluptates neque excepturi similique veritatis? Nam iste quae saepe sapiente perspiciatis incidunt iusto cupiditate cum debitis. Perspiciatis ab ratione excepturi voluptatem suscipit ullam neque deleniti veniam, vero eligendi et doloribus a odio dolor quo in repellendus eveniet!"
        ],
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
