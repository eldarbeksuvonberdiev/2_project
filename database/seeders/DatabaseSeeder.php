<?php

namespace Database\Seeders;

use App\Models\Masalliq;
use App\Models\Ovqat;
use App\Models\OvqatMasalliq;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'email' => 'test@example.com',
        ]);

        for ($i=1; $i < 11; $i++) { 
            Ovqat::create(['name'=> 'Ovqat '.$i]);
        }

        for ($i=1; $i < 11; $i++) { 
            Masalliq::create(['name'=> 'Masalliq '.$i]);
        }

        for ($i=1; $i < 100; $i++) { 
            OvqatMasalliq::create([
                'ovqat_id'=> rand(1,10),
                'masalliq_id'=> rand(1,10)
            ]);
        }
    }
}
