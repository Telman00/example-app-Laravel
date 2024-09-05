<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // dd(1);
        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(6)->create();
        // $this->call([UserSeeder::class]);
        Blog::factory(50)->create();
        Category::factory(10)->create();
        //User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([BlogSeeder::class]);
    }
}
