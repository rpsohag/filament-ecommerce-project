<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'description' => 'Samsung',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'description' => 'Apple',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony',
                'slug' => 'sony',
                'description' => 'Sony',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LG',
                'slug' => 'lg',
                'description' => 'LG',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Philips',
                'slug' => 'philips',
                'description' => 'Philips',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'description' => 'Panasonic',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toshiba',
                'slug' => 'toshiba',
                'description' => 'Toshiba',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nokia',
                'slug' => 'nokia',
                'description' => 'Nokia',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Motorola',    
                'slug' => 'motorola',
                'description' => 'Motorola',
                'image' => 'https://placehold.jp/200x200.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
