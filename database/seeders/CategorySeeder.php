<?php

namespace Database\Seeders;

use App\Enum\StatusType;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'slug' => 'electronics', 'status' => StatusType::ACTIVE],
            ['name' => 'Fashion', 'slug' => 'fashion', 'status' => StatusType::ACTIVE],
            ['name' => 'Home & Kitchen', 'slug' => 'home-kitchen', 'status' => StatusType::ACTIVE],
            ['name' => 'Books', 'slug' => 'books', 'status' => StatusType::ACTIVE],
            ['name' => 'Sports & Outdoors', 'slug' => 'sports-outdoors', 'status' => StatusType::ACTIVE],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
