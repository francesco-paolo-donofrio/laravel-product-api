<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        CategorySeeder::create(['name' => 'Electronics']);
        CategorySeeder::create(['name' => 'Furniture']);
        CategorySeeder::create(['name' => 'Clothing']);
        CategorySeeder::create(['name' => 'Food']);
    }
}
