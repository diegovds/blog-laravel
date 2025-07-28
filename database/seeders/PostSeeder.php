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



        $post1 = Post::create([
            'title' => 'Post ' . 1,
            'body' => 'Conteúdo do post número ' . 1,
            'cover' => 'https://',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' =>  1
        ]);
        $post1 -> tags() -> attach([1, 2]);

        $post2 = Post::create([
            'title' => 'Post ' . 2,
            'body' => 'Conteúdo do post número ' . 2,
            'cover' => 'https://',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' =>  2
        ]);
        $post2 -> tags() -> attach([1, 3]);

        $post3 = Post::create([
            'title' => 'Post ' . 3,
            'body' => 'Conteúdo do post número ' . 3,
            'cover' => 'https://',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' =>  3
        ]);
        $post3 -> tags() -> attach([3, 4]);

        $post4 = Post::create([
            'title' => 'Post ' . 4,
            'body' => 'Conteúdo do post número ' . 4,
            'cover' => 'https://',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' =>  4
        ]);
        $post4 -> tags() -> attach([1, 2, 3, 4]);
    }
}
