<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Certifique-se de que existam usuários
        $users = User::all();

        // Se não houver usuários, aborta
        if ($users->count() === 0) {
            $this->command->info('Nenhum usuário encontrado. Rode o UserSeeder primeiro.');
            return;
        }

        // Criar 20 posts aleatórios
        foreach (range(1, 20) as $i) {
            Post::create([
                'title' => 'Post ' . $i,
                'content' => 'Conteúdo do post número ' . $i,
                'cover' => 'https://',
                'status' => 'PUBLISHED',
                'authorId' => 1,
                'slug' =>  $i
            ]);
        }
    }
}
