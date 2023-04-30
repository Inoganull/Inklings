<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->count(20)->create();
        Category::factory()->count(5)->create();

        User::factory()->create([
            "username" => "Alice", 
            "email" => "alice@gmail.com",
        ]);

        User::factory()->create([
            "username" => "Bob", 
            "email" => "bob@gmail.com",
        ]);

    }
}
