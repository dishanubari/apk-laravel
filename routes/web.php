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
        "nama" => "Dishanubari Pramudia",
        "email" => "dishanubaripr@gmail.com",
        "image" => "disha.webp"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dishanubari Pramudia",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quos velit sunt inventore, voluptatibus blanditiis exercitationem animi laborum? Necessitatibus placeat soluta dolorem dolorum animi officiis maxime. Earum explicabo adipisci obcaecati?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nagita Syifa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis culpa eligendi quisquam corporis quibusdam velit, aliquid et aut minus, eos dolorum quas error? Adipisci aut, saepe voluptatum quisquam neque consequatur aperiam, distinctio tempora temporibus assumenda voluptatem et sed eligendi animi pariatur ullam consectetur. Impedit, facilis ut. In tempora sunt enim molestias cum? Architecto laudantium impedit repellendus commodi, incidunt provident rem nemo dignissimos odio perspiciatis quos aliquam necessitatibus asperiores odit doloremque corporis perferendis est facere eveniet quibusdam repellat, rerum saepe? Impedit nemo quisquam harum. Modi asperiores ad illum alias dolorum iste omnis vitae? Reiciendis et, suscipit tempore eum doloremque recusandae!"
        ],
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single page
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dishanubari Pramudia",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quos velit sunt inventore, voluptatibus blanditiis exercitationem animi laborum? Necessitatibus placeat soluta dolorem dolorum animi officiis maxime. Earum explicabo adipisci obcaecati?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nagita Syifa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis culpa eligendi quisquam corporis quibusdam velit, aliquid et aut minus, eos dolorum quas error? Adipisci aut, saepe voluptatum quisquam neque consequatur aperiam, distinctio tempora temporibus assumenda voluptatem et sed eligendi animi pariatur ullam consectetur. Impedit, facilis ut. In tempora sunt enim molestias cum? Architecto laudantium impedit repellendus commodi, incidunt provident rem nemo dignissimos odio perspiciatis quos aliquam necessitatibus asperiores odit doloremque corporis perferendis est facere eveniet quibusdam repellat, rerum saepe? Impedit nemo quisquam harum. Modi asperiores ad illum alias dolorum iste omnis vitae? Reiciendis et, suscipit tempore eum doloremque recusandae!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});