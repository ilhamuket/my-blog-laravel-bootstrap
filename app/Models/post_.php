<?php

namespace App\Models;


class Post
{
            private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Muhammad Ilham",
                "blog" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, sint reprehenderit voluptas molestiae corporis repellendus dolore modi quae laudantium pariatur voluptates facere qui quo. Enim laborum iste rerum architecto molestiae!"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Muhammad Rizki",
                "blog" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sed aliquam nostrum vel architecto voluptatem vitae eveniet impedit autem aspernatur, id, dignissimos cum. Omnis aspernatur delectus, quis sequi dolor, facilis debitis aliquam recusandae laborum doloremque perferendis sit explicabo reprehenderit cumque officiis temporibus asperiores ex nemo fugiat quisquam corporis impedit. Alias asperiores itaque incidunt aperiam? Neque fugiat sapiente iure, architecto eos quas soluta tenetur natus omnis! Tempora reiciendis laborum delectus voluptatibus cum maiores, necessitatibus modi optio. Nemo eligendi velit consequuntur incidunt illum? Quo dolore beatae, culpa omnis dignissimos officia perspiciatis, eveniet magnam explicabo cumque fugit non natus fugiat labore corporis obcaecati."
            ],
            ];

            public static function all()
            {
                return collect(self::$blog_posts);
            }

            public static function find($slug){
                $posts = static::all();
            //     $post = [];
            // foreach($posts as $p){
            //     if($p["slug"] === $slug){
            //         $post = $p;
            //     }
            // }

            return $posts->firstWhere('slug', $slug);

            }
}

?>