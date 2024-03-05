<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'title' => 'Personal',
                'img' => 'boy.png',
            ],
            [
                'id' => 2,
                'title' => 'Work',
                'img' => 'briefcase.png',
            ],
            [
                'id' => 3,
                'title' => 'Shopping',
                'img' => 'shopping.png',
            ],
            [
                'id' => 4,
                'title' => 'Coding',
                'img' => 'web-design.png',
            ],
            [
                'id' => 5,
                'title' => 'Health',
                'img' => 'healthcare.png',
            ],
            [
                'id' => 6,
                'title' => 'Fitness',
                'img' => 'dumbbell.png',
            ],
            [
                'id' => 7,
                'title' => 'Education',
                'img' => 'education.png',
            ],
            [
                'id' => 8,
                'title' => 'Finance',
                'img' => 'saving.png',
            ],
            // Define other categories here
        ];

        Category::insert($categories);
    }
}
