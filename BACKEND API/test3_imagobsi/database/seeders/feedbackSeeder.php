<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\feedback;
class feedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data feedback manual
        $feedbacks = [
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'comment' => 'Aplikasi sangat membantu!',
            ],
            [
                'name' => 'Siti Aminah',
                'email' => 'siti@example.com',
                'comment' => 'Fitur perlu ditambah.',
            ],
            [
                'name' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'comment' => 'Tampilan menarik dan mudah digunakan.',
            ],
        ];

        foreach ($feedbacks as $feedback) {
            feedback::create($feedback);
        }
    }
}
