<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Alvin',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis velit mollitia, voluptatibus voluptate culpa neque nemo corporis accusamus a consequuntur deserunt eveniet maxime vero in odit sapiente quis et sed! Delectus excepturi impedit, molestiae molestias consequatur deserunt veritatis earum placeat ducimus blanditiis repudiandae consequuntur est nobis magnam dicta reprehenderit explicabo magni inventore dignissimos omnis modi autem ullam veniam obcaecati! Sit ducimus, molestias illo libero vitae voluptatibus earum facilis voluptates, quos, soluta voluptatem quod unde praesentium similique sapiente aut possimus?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Yusuf',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolores doloribus amet harum nulla rerum atque voluptatum perspiciatis odit temporibus quisquam quaerat eveniet praesentium, enim voluptates sit commodi numquam in. Consectetur ipsa nostrum tenetur nulla nisi cumque asperiores qui rerum voluptate repellat pariatur iure quae adipisci, cum eligendi ad architecto eum, optio odit, officia id? Tempore voluptate aliquid suscipit esse, architecto excepturi qui itaque commodi odit quas nihil quam dolor nesciunt blanditiis, possimus ipsam praesentium, aspernatur culpa rem tenetur corporis? Earum labore ullam, accusantium blanditiis cupiditate delectus, accusamus ipsa aperiam odit eligendi provident numquam obcaecati, natus fuga reiciendis harum et.'
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $post = [];

        // foreach ($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
