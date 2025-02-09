<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Women\'s & Girl\'s Fashion',
                'slug' => 'womens-girls-fashion',
                'description' => 'Women\'s & Girls\' Fashion',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Traditional Wear',
                'slug' => 'traditional-wear',
                'description' => 'Traditional Wear',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Muslim Wear',
                'slug' => 'muslim-wear',
                'description' => 'Muslim Wear',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Western Wear',
                'slug' => 'western-wear',
                'description' => 'Western Wear',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Innerwear',
                'slug' => 'innerwear',
                'description' => 'Innerwear',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shoes',
                'slug' => 'shoes',
                'description' => 'Shoes',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bags',
                'slug' => 'bags',
                'description' => 'Bags',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Watches',
                'slug' => 'watches',
                'description' => 'Watches',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health & Beauty',
                'slug' => 'health-beauty',
                'description' => 'Health & Beauty',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Skin Care',
                'slug' => 'skin-care',
                'description' => 'Skin Care',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hair Care',
                'slug' => 'hair-care',
                'description' => 'Hair Care',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup',
                'slug' => 'makeup',
                'description' => 'Makeup',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fragrances',
                'slug' => 'fragrances',
                'description' => 'Fragrances',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beauty Tools',
                'slug' => 'beauty-tools',
                'description' => 'Beauty Tools',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bath & Body',
                'slug' => 'bath-body',
                'description' => 'Bath & Body',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Personal Care',
                'slug' => 'personal-care',
                'description' => 'Personal Care',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Men\'s & Boy\'s Fashion',
                'slug' => 'mens-boys-fashion',
                'description' => 'Men\'s & Boys\' Fashion',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'description' => 'Clothing',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'parent_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
