<?php

namespace Database\Seeders;

use App\Models\BlogPosts;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();

        Category::insert([
            [
                'name' => 'General',
                'slug' => 'general',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, repudiandae!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'description' => 'Eos repellendus ut dolores neque perferendis ducimus suscipit similique mollitia!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
            [
                'name' => 'Studential',
                'slug' => 'studential',
                'description' => 'Nihil animi commodi unde suscipit doloremque officia tenetur rerum inventore!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
        ]);

        BlogPosts::factory(100)->create();
    }
}
