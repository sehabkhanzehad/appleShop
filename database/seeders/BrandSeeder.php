<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::truncate();
        Brand::insert([
            [
                'name' => 'DELL',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b1.jpg',
            ],
            [
                'name' => 'Xiaomi',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b2.jpg',
            ],
            [
                'name' => 'HUAWEI',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b3.jpg',
            ],
            [
                'name' => 'Vivo',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b4.jpg',
            ],
            [
                'name' => 'HP',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b5.jpg',
            ],
            [
                'name' => 'Walton',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b1.jpg',
            ],
            [
                'name' => 'Apple',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b2.jpg',
            ],
            [
                'name' => 'Lenovo',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/b3.jpg',
            ],
        ]);
    }
}
