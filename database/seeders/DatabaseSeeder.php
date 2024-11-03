<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Field;
use App\Models\Group;
use App\Models\Masalliq;
use App\Models\Ovqat;
use App\Models\OvqatMasalliq;
use App\Models\Post;
use App\Models\Student;
use App\Models\University;
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

        // for ($i=1; $i < 11; $i++) { 
        //     Ovqat::create(['name'=> 'Ovqat '.$i]);
        // }

        // for ($i=1; $i < 11; $i++) { 
        //     Masalliq::create(['name'=> 'Masalliq '.$i]);
        // }

        // for ($i=1; $i < 100; $i++) { 
        //     OvqatMasalliq::create([
        //         'ovqat_id'=> rand(1,10),
        //         'masalliq_id'=> rand(1,10)
        //     ]);
        // }

        // for ($i=1; $i < 11; $i++) { 
        //     University::create(['name'=> 'University'.$i]);
        // }

        // for ($i=1; $i < 11; $i++) { 
        //     Faculty::create(['university_id' => rand(1,10),'name'=> 'Faculty'.$i]);
        // }

        // for ($i=1; $i < 11; $i++) { 
        //     Field::create(['faculty_id'=>rand(1,10),'name'=> 'Field'.$i]);
        // }

        // for ($i=1; $i < 7; $i++) { 
        //     Course::create(['name'=> 'Course'.$i]);
        // }

        // for ($i=1; $i < 11; $i++) { 
        //     Group::create(['field_id'=>rand(1,10),'course_id'=>rand(1,6),'name'=> 'Group'.$i]);
        // }

        // for ($i=1; $i < 11; $i++) { 
        //     Address::create(['name'=> 'Address'.$i]);
        // }

        // for ($i=1; $i < 2000; $i++) { 
        //     Student::create(['group_id'=>rand(1,10),'address_id' => rand(1,10),'name'=> 'student'.$i,'phone'=>fake()->phoneNumber(),'image'=>fake()->address()]);
        // }

        // for ($i=1; $i < 20; $i++) { 
        //     Category::create(['name'=>'Category'.$i]);
        // }

        // for ($i=1; $i < 1000; $i++) { 
        //     Post::create(['category_id'=>rand(1,19),'title'=>fake()->title(),'description'=>fake()->text(100),'body'=>fake()->text(),'image'=>fake()->text(50)]);
        // }
    }
}
