<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'id' => 1,
                'task' => 'Go to market',
                'category_id' => 3, // Shopping
                'completed' => false,
            ],
            [
                'id' => 2,
                'task' => 'Read a chapter of a book',
                'category_id' => 1, // Personal
                'completed' => false,
            ],
            [
                'id' => 3,
                'task' => 'Prepare presentation for meeting',
                'category_id' => 2, // Work
                'completed' => false,
            ],
            [
                'id' => 4,
                'task' => 'Complete coding challenge',
                'category_id' => 4, // Coding
                'completed' => false,
            ],
            [
                'id' => 5,
                'task' => 'Take a 30-minute walk',
                'category_id' => 5, // Health
                'completed' => false,
            ],
            [
                'id' => 6,
                'task' => 'Do a 20-minute HIIT workout',
                'category_id' => 6, // Fitness
                'completed' => false,
            ],
            [
                'id' => 7,
                'task' => 'Watch an educational video online',
                'category_id' => 7, // Education
                'completed' => false,
            ],
            [
                'id' => 8,
                'task' => 'Review monthly budget',
                'category_id' => 8, // Finance
                'completed' => false,
            ],
            [
                'id' => 9,
                'task' => 'Buy groceries for the week',
                'category_id' => 3, // Shopping
                'completed' => false,
            ],
            [
                'id' => 10,
                'task' => 'Write in a journal',
                'category_id' => 1, // Personal
                'completed' => false,
            ],
            [
                'id' => 11,
                'task' => 'Send follow-up emails',
                'category_id' => 2, // Work
                'completed' => false,
            ],
            [
                'id' => 12,
                'task' => 'Work on a coding side project',
                'category_id' => 4, // Coding
                'completed' => false,
            ],
            [
                'id' => 13,
                'task' => 'Try a new healthy recipe',
                'category_id' => 5, // Health
                'completed' => false,
            ],
            [
                'id' => 14,
                'task' => 'Attend a yoga class',
                'category_id' => 6, // Fitness
                'completed' => false,
            ],
            [
                'id' => 15,
                'task' => 'Read an article about a new topic',
                'category_id' => 7, // Education
                'completed' => false,
            ],
            [
                'id' => 16,
                'task' => 'Set up automatic bill payments',
                'category_id' => 8, // Finance
                'completed' => false,
            ],
            [
                'id' => 17,
                'task' => 'Buy new clothes',
                'category_id' => 3, // Shopping
                'completed' => false,
            ],
            [
                'id' => 18,
                'task' => 'Meditate for 10 minutes',
                'category_id' => 1, // Personal
                'completed' => false,
            ],
            [
                'id' => 19,
                'task' => 'Prepare agenda for team meeting',
                'category_id' => 2, // Work
                'completed' => false,
            ],
            [
                'id' => 20,
                'task' => 'Debug a software issue',
                'category_id' => 4, // Coding
                'completed' => false,
            ],
            [
                'id' => 21,
                'task' => 'Try a new recipe for lunch',
                'category_id' => 5, // Health
                'completed' => false,
            ],
            [
                'id' => 22,
                'task' => 'Go for a run',
                'category_id' => 6, // Fitness
                'completed' => false,
            ],
            [
                'id' => 23,
                'task' => 'Learn a new language online',
                'category_id' => 7, // Education
                'completed' => false,
            ],
            [
                'id' => 24,
                'task' => 'Read about history',
                'category_id' => 7, // Education
                'completed' => false,
            ],
            [
                'id' => 25,
                'task' => 'Review investment portfolio',
                'category_id' => 8, // Finance
                'completed' => false,
            ],
        ];

        Task::insert($tasks);
    }
}
