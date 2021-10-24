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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Taufik hidayat",
        "email" => "Taufikhidayat@unpas.ac.id",
        "image" => "Taufik.jpeg"



    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufik hidayat",
            "body" => "lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis doloremque, porro optio perspiciatis mollitia delectus, fugiat ratione adipisci dolore alias dolores nisi animi iure explicabo eos tempora incidunt, obcaecati minus fuga accusamus autem vel praesentium expedita? Facilis cumque fugit quasi porro doloribus quaerat, molestiae minima repellat autem laudantium eaque libero laborum at optio quos. Voluptatem porro exercitationem, deleniti iusto molestiae possimus eius assumenda praesentium voluptates! Adipisci inventore quibusdam deserunt commodi, impedit quae ipsa veritatis, totam perspiciatis maiores distinctio, consequatur facilis?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "herlan nurachman",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nam debitis, autem ab, repellat reiciendis placeat consequatur aliquam incidunt maxime, laboriosam accusantium obcaecati quasi consectetur maiores earum unde. Reprehenderit laudantium placeat reiciendis vel commodi maxime ipsum, amet consequuntur repellendus aspernatur! Officiis sint rerum itaque animi ipsa voluptas laborum magni quod repellat ullam vitae blanditiis eligendi nostrum nisi aperiam, est dolore, libero ducimus tempore iste deserunt in dolores facilis! Rerum quas, perferendis facilis consequatur fugit officia quo deleniti voluptatem asperiores ratione obcaecati nobis exercitationem laboriosam tenetur suscipit sequi adipisci ab. Praesentium nisi, at sequi quidem ad ipsum exercitationem nulla labore officiis."
        ],
    ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

//halaman sigle post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufik hidayat",
            "body" => "lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis doloremque, porro optio perspiciatis mollitia delectus, fugiat ratione adipisci dolore alias dolores nisi animi iure explicabo eos tempora incidunt, obcaecati minus fuga accusamus autem vel praesentium expedita? Facilis cumque fugit quasi porro doloribus quaerat, molestiae minima repellat autem laudantium eaque libero laborum at optio quos. Voluptatem porro exercitationem, deleniti iusto molestiae possimus eius assumenda praesentium voluptates! Adipisci inventore quibusdam deserunt commodi, impedit quae ipsa veritatis, totam perspiciatis maiores distinctio, consequatur facilis?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "herlan nurachman",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nam debitis, autem ab, repellat reiciendis placeat consequatur aliquam incidunt maxime, laboriosam accusantium obcaecati quasi consectetur maiores earum unde. Reprehenderit laudantium placeat reiciendis vel commodi maxime ipsum, amet consequuntur repellendus aspernatur! Officiis sint rerum itaque animi ipsa voluptas laborum magni quod repellat ullam vitae blanditiis eligendi nostrum nisi aperiam, est dolore, libero ducimus tempore iste deserunt in dolores facilis! Rerum quas, perferendis facilis consequatur fugit officia quo deleniti voluptatem asperiores ratione obcaecati nobis exercitationem laboriosam tenetur suscipit sequi adipisci ab. Praesentium nisi, at sequi quidem ad ipsum exercitationem nulla labore officiis."
        ],
    ];

    $neW_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $neW_post = $post;
        }
    }
    return view('post', [
        "title" => "Single post",
        "post" => $neW_post
    ]);
});
