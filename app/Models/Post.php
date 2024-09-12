<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug'=>'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Audrey',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.'
            ],
            [
                'id' => 2,
                'slug'=>'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Audrey',
                'body' => 'Artikel 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.'
            ]
        ];
    }

    public static function find($slug){
        return Arr::first(static::all(), fn($post) =>$post['slug'] == $slug 
        );
    
        // Handle case if post is not found
        
    }
}

?>