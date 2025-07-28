<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts(Request $request) {

        $posts_per_page = 5;

        $posts = Post::paginate($posts_per_page);

        $pagesPosts = [];

        foreach ($posts as $post) {
            $pagesPosts[] = [
                'id' => $post -> id,
                'title' => $post -> title,
                'createdAt' => $post -> created_at,
                'cover' => $post -> cover,
                'authorName' => $post -> author -> name,
                'tags' => $post -> tags -> implode('name', ', '),
                'body' => $post -> body,
                'slug' => $post -> slug,
            ];
        }

        return [
            'posts' => $pagesPosts,
            'page' => $posts -> currentPage()
        ];
    }

    public function getPost(string $slug) {

        $post = Post::where('slug', $slug) -> first();

        if (!$post) {
            return response() -> json(['error' => '404 Not found'], 404);
        }

        return [
            'post' => [
                'id' => $post -> id,
                'title' => $post -> title,
                'createdAt' => $post -> created_at,
                'cover' => $post -> cover,
                'authorName' => $post -> author -> name,
                'tags' => $post -> tags -> implode('name', ', '),
                'body' => $post -> body,
                'slug' => $post -> slug,
            ]
        ];
    }

    public function getRelatedPosts(string $slug) {

        // Busca o post pelo slug
        $post = Post::where('slug', $slug) -> first();

        // Se o post não existir, retorna 404
        if (!$post) {
            return response() -> json(['error' => '404 Not found'], 404);
        }

        // Pegar as tags do post
        $tagsList = $post -> tags -> pluck('id');

        // Buscar todos os posts que tenham pelo menos uma das tags
        $relatedPosts = Post::where('id', '!=', $post -> id)
            -> whereHas('tags', function ($query) use ($tagsList) {
                // Vamos filtrar os posts que possuem alguma das tags
                $query -> whereIn('tags.id', $tagsList);
            })
            -> limit(5)
            -> get()
            ;

        $returnPostdata = $relatedPosts -> map(function ($post) {
            return [
                'id' => $post -> id,
                'title' => $post -> title,
                'createdAt' => $post -> created_at,
                'cover' => $post -> cover,
                'authorName' => $post -> author -> name,
                'tags' => $post -> tags -> implode('name', ', '),
                'body' => $post -> body,
                'slug' => $post -> slug,
            ];
        });

        return response() -> json([
            'posts' => $returnPostdata
        ]);
    }
}
