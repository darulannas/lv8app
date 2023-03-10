<?php

namespace Database\Seeders;

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

        User::create([
            'name' => 'Darul Annas',
            'username' => 'darulannas',
            'email' => 'darulannas7@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Mirza',
        //     'email' => 'mirza@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
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
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
