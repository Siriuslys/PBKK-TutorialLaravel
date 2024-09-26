<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {

    // Using Arr::first to find the post by slug
    // $post = Post::find($id);

    if (!$post) {
        abort(404);  // Return a 404 error if the post is not found
    }

    // Passing the post data and the title to the view
    return view('post', [
        'title' => $post['title'],  // Accessing the post title correctly
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'instagram' => '@audreysw',
        'phone' => '081392829',
        'title' => 'Contact'
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles by ' .$user->name, 'posts' => $user->posts]);
});

