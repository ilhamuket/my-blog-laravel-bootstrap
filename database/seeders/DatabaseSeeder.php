<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Muhammad Ilham',
        //     'email' => 'muhammad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhammad Rizki',
        //     'email' => 'rizki2@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        User::factory(3)->create();

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.</p>
        //                 <p> Quae veritatis amet repellat cum possimus nisi illum sint, consectetur repudiandae nostrum! Omnis, cum blanditiis? Dolorum inventore reiciendis, iure eum sunt corporis molestiae a laboriosam iste consectetur quam quae facere eius harum non!</p>
        //                 <p> Enim, nobis perspiciatis sint consequuntur cum nesciunt architecto sapiente nulla est voluptas, animi eveniet odit ratione consectetur culpa esse tenetur aliquid molestiae porro corrupti facilis. Consequatur ipsa nesciunt aut placeat, fugit error, harum cum eveniet, quasi hic quisquam nemo. Error tenetur nihil a voluptatem accusantium iusto, quibusdam ducimus eius quos sint illum impedit suscipit! Fugiat alias doloremque fugit, animi voluptatibus laboriosam aut ipsum minima nesciunt voluptates modi minus id corporis. Perferendis repellendus, dolor optio, ad neque recusandae molestias quo nemo provident odio magni.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.</p>
        //                 <p> Quae veritatis amet repellat cum possimus nisi illum sint, consectetur repudiandae nostrum! Omnis, cum blanditiis? Dolorum inventore reiciendis, iure eum sunt corporis molestiae a laboriosam iste consectetur quam quae facere eius harum non!</p>
        //                 <p> Enim, nobis perspiciatis sint consequuntur cum nesciunt architecto sapiente nulla est voluptas, animi eveniet odit ratione consectetur culpa esse tenetur aliquid molestiae porro corrupti facilis. Consequatur ipsa nesciunt aut placeat, fugit error, harum cum eveniet, quasi hic quisquam nemo. Error tenetur nihil a voluptatem accusantium iusto, quibusdam ducimus eius quos sint illum impedit suscipit! Fugiat alias doloremque fugit, animi voluptatibus laboriosam aut ipsum minima nesciunt voluptates modi minus id corporis. Perferendis repellendus, dolor optio, ad neque recusandae molestias quo nemo provident odio magni.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.</p>
        //                 <p> Quae veritatis amet repellat cum possimus nisi illum sint, consectetur repudiandae nostrum! Omnis, cum blanditiis? Dolorum inventore reiciendis, iure eum sunt corporis molestiae a laboriosam iste consectetur quam quae facere eius harum non!</p>
        //                 <p> Enim, nobis perspiciatis sint consequuntur cum nesciunt architecto sapiente nulla est voluptas, animi eveniet odit ratione consectetur culpa esse tenetur aliquid molestiae porro corrupti facilis. Consequatur ipsa nesciunt aut placeat, fugit error, harum cum eveniet, quasi hic quisquam nemo. Error tenetur nihil a voluptatem accusantium iusto, quibusdam ducimus eius quos sint illum impedit suscipit! Fugiat alias doloremque fugit, animi voluptatibus laboriosam aut ipsum minima nesciunt voluptates modi minus id corporis. Perferendis repellendus, dolor optio, ad neque recusandae molestias quo nemo provident odio magni.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab eligendi neque non quam. Possimus eaque, molestias rem inventore porro aut! Architecto nulla explicabo, mollitia aliquam totam officiis blanditiis neque fugit, in quas assumenda.</p>
        //                 <p> Quae veritatis amet repellat cum possimus nisi illum sint, consectetur repudiandae nostrum! Omnis, cum blanditiis? Dolorum inventore reiciendis, iure eum sunt corporis molestiae a laboriosam iste consectetur quam quae facere eius harum non!</p>
        //                 <p> Enim, nobis perspiciatis sint consequuntur cum nesciunt architecto sapiente nulla est voluptas, animi eveniet odit ratione consectetur culpa esse tenetur aliquid molestiae porro corrupti facilis. Consequatur ipsa nesciunt aut placeat, fugit error, harum cum eveniet, quasi hic quisquam nemo. Error tenetur nihil a voluptatem accusantium iusto, quibusdam ducimus eius quos sint illum impedit suscipit! Fugiat alias doloremque fugit, animi voluptatibus laboriosam aut ipsum minima nesciunt voluptates modi minus id corporis. Perferendis repellendus, dolor optio, ad neque recusandae molestias quo nemo provident odio magni.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}