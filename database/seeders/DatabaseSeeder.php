<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\TreeDonation;
use Illuminate\Database\Seeder;
use App\Models\EnvironmentalSavings;
use App\Models\OnlineCommunity;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(2)->has(Product::factory()->count(5))->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 'test1234',
        // ]);
        

        EnvironmentalSavings::factory(10)->create([
            'user_id' => 1,
        ]);

        TreeDonation::factory(10)->create([
            'user_id' => 1,
        ]);
        
        Certificate::factory(1)->create([
            'user_id' => 1,
        ]);

        OnlineCommunity::factory(10)->create([
            'user_id' => 1,
        ]);

        // Category::factory(10)->has(Product::factory()->count(2))->create();
    }
}
