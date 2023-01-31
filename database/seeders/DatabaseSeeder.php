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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Darul Annas',
            'email' => 'darulannas7@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Mirza',
            'email' => 'mirza@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
            'category_id' => 1,
            'user_id' => 1

        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
            'category_id' => 1,
            'user_id' => 1

        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
            'category_id' => 2,
            'user_id' => 1

        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, sequi unde officia labore reiciendis eveniet nulla fugiat non dolores qui.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet dignissimos molestias omnis ipsum quibusdam, eligendi ratione, nostrum enim doloribus eum. Nemo iste sint qui nostrum? Reiciendis qui cum nobis perferendis omnis illum odit? Error saepe possimus voluptatem, asperiores deleniti expedita quaerat, voluptatum consequatur dolor placeat sapiente adipisci, dolore quis?',
            'category_id' => 2,
            'user_id' => 2

        ]);
    }
}
