<?php

namespace App\Models;

class BlogPosts
{
    private static $blogPosts = [
        [
            "title" => "Post1",
            "slug" => "Post1",
            "author" => "Mr. Nobody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Post2",
            "slug" => "Post2",
            "author" => "Mr. Nobody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Post3",
            "slug" => "Post3",
            "author" => "Mr. Nobody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Post4",
            "slug" => "Post4",
            "author" => "Mr. Nobody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Post5",
            "slug" => "Post5",
            "author" => "Mr. Nobody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Post6",
            "slug" => "Post6",
            "author" => "Mr. Nobody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
