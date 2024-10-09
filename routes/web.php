<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Posts', 'posts' => $posts]);
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

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category','author');
    return view('posts', ['title' => count($user->posts). ' Articles by ' .$user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $user->posts->load('category','author');
    return view('posts', ['title' => ' Category: ' .$category->name, 'posts' => $category->posts]);
});
