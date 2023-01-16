<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use function PHPSTORM_META\map;

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
        
        User::create([
            'name' => 'Alvin Yusuf Riziq',
            'username' => 'alvin',
            'email' => 'alvin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Ulul Azmi',
        //     'email' => 'ululazm@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'jhudul-pertama',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatem nesciunt adipisci fugiat atque, incidunt dolorem, quod dignissimos sed iusto',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptate facilis reprehenderit enim aliquam ratione dolorum suscipit explicabo magni veniam veritatis impedit facere velit dolorem molestiae obcaecati quasi officiis quisquam, rem eaque excepturi laboriosam architecto! Nulla accusamus impedit quaerat exercitationem doloribus recusandae vitae quo, placeat explicabo facilis saepe repellat! Omnis sapiente qui excepturi impedit est magnam modi ex iusto suscipit molestiae natus deserunt, at beatae nostrum repellat blanditiis voluptate debitis distinctio! Itaque amet non suscipit voluptates est adipisci facilis consequatur perspiciatis veritatis asperiores repudiandae, excepturi aliquam iste ducimus impedit quae earum perferendis. Dignissimos adipisci eveniet tenetur optio quos odit! Sunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'jhudul-ke-dua',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatem nesciunt adipisci fugiat atque, incidunt dolorem, quod dignissimos sed iusto',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptate facilis reprehenderit enim aliquam ratione dolorum suscipit explicabo magni veniam veritatis impedit facere velit dolorem molestiae obcaecati quasi officiis quisquam, rem eaque excepturi laboriosam architecto! Nulla accusamus impedit quaerat exercitationem doloribus recusandae vitae quo, placeat explicabo facilis saepe repellat! Omnis sapiente qui excepturi impedit est magnam modi ex iusto suscipit molestiae natus deserunt, at beatae nostrum repellat blanditiis voluptate debitis distinctio! Itaque amet non suscipit voluptates est adipisci facilis consequatur perspiciatis veritatis asperiores repudiandae, excepturi aliquam iste ducimus impedit quae earum perferendis. Dignissimos adipisci eveniet tenetur optio quos odit! Sunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'jhudul-ke-tiga',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatem nesciunt adipisci fugiat atque, incidunt dolorem, quod dignissimos sed iusto',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptate facilis reprehenderit enim aliquam ratione dolorum suscipit explicabo magni veniam veritatis impedit facere velit dolorem molestiae obcaecati quasi officiis quisquam, rem eaque excepturi laboriosam architecto! Nulla accusamus impedit quaerat exercitationem doloribus recusandae vitae quo, placeat explicabo facilis saepe repellat! Omnis sapiente qui excepturi impedit est magnam modi ex iusto suscipit molestiae natus deserunt, at beatae nostrum repellat blanditiis voluptate debitis distinctio! Itaque amet non suscipit voluptates est adipisci facilis consequatur perspiciatis veritatis asperiores repudiandae, excepturi aliquam iste ducimus impedit quae earum perferendis. Dignissimos adipisci eveniet tenetur optio quos odit! Sunt.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'jhudul-ke-empat',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatem nesciunt adipisci fugiat atque, incidunt dolorem, quod dignissimos sed iusto',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptate facilis reprehenderit enim aliquam ratione dolorum suscipit explicabo magni veniam veritatis impedit facere velit dolorem molestiae obcaecati quasi officiis quisquam, rem eaque excepturi laboriosam architecto! Nulla accusamus impedit quaerat exercitationem doloribus recusandae vitae quo, placeat explicabo facilis saepe repellat! Omnis sapiente qui excepturi impedit est magnam modi ex iusto suscipit molestiae natus deserunt, at beatae nostrum repellat blanditiis voluptate debitis distinctio! Itaque amet non suscipit voluptates est adipisci facilis consequatur perspiciatis veritatis asperiores repudiandae, excepturi aliquam iste ducimus impedit quae earum perferendis. Dignissimos adipisci eveniet tenetur optio quos odit! Sunt.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
