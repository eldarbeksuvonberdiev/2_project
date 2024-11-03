<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\text;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
            'password' => '123456'
        ]);

        // for ($i=1; $i < 20; $i++) { 
        //     Category::create(['name'=>'Category'.$i]);
        // }

        // for ($i=1; $i < 1000; $i++) { 
        //     Post::create(['category_id'=>rand(1,19),'title'=>fake()->title(),'description'=>fake()->text(100),'body'=>fake()->text(),'image'=>fake()->text(50)]);
        // }
    }
}
