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
    public function run(): void
    {
        Category::truncate();
        Category::insert([
            [
                'name' => 'Television',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/cat1.jpg',
            ],
            [
                'name' => 'Mobile',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/cat2.jpg',
            ],
            [
                'name' => 'Headphone',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/cat3.jpg',
            ],
            [
                'name' => 'Watch',
                'image' => 'https://photo.teamrabbil.com/images/2023/09/09/cat4.jpg',
            ],
            [
                'name' => 'Game',
                'img_url' => 'https://photo.teamrabbil.com/images/2023/09/09/cat5.jpg',
            ],
            [
                'name' => 'Camera',
                'img_url' => 'https://photo.teamrabbil.com/images/2023/09/09/cat6.jpg',
            ],
            [
                'name' => 'Audio',
                'img_url' => 'https://photo.teamrabbil.com/images/2023/09/09/cat7.jpg',
            ],
        ]);
    }
}
