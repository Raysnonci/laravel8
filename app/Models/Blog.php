<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // private static $blog_posts = [
    //     [
    //         'title' => 'First Post',
    //         'slug' => 'first-post',
    //         'author' => 'Mamat Jebred',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iusto ipsa dignissimos provident, ab laborum similique quo explicabo omnis officiis totam incidunt vero minima, aut repellat. Illo vero totam repudiandae.'
    //     ],
    //     [
    //         'title' => 'Second Post',
    //         'slug' => 'second-post',
    //         'author' => 'Mamat Karbol',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, recusandae animi illo deserunt exercitationem culpa ea eaque excepturi sit placeat natus fuga quos nam illum libero ratione explicabo dolores ex! Id, alias soluta! Libero id dolorem ex mollitia accusantium aliquid vitae quaerat temporibus distinctio, itaque dolorum eaque iusto dicta! Voluptates quos nemo totam delectus pariatur, fugit et excepturi dicta deleniti ducimus omnis impedit consequatur esse nam eaque eligendi. Nisi sequi ut maiores delectus illo laboriosam quibusdam explicabo sit sed perferendis!'
    //     ]
    // ];

    // public static function kabeh()
    // {
    //     return collect(self::$blog_posts);
    // }

    // public static function teang($slug)
    // {
    //     $posts = static::kabeh();

    //     return $posts->firstWhere('slug', $slug);
    // }
}
