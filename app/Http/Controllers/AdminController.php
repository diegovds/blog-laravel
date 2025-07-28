<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getPosts(Request $request) {

        $user = $request -> user();

        $posts_per_page = 10;

        $posts = Post::where('authorId', $user -> id) -> paginate($posts_per_page);

        $pagesPosts = [];

        foreach ($posts as $post) {
            $pagesPosts[] = [
                'id' => $post -> id,
                'title' => $post -> title,
                'createdAt' => $post -> createdAt,
                'authorName' => $post -> author -> name,
                'tags' => $post -> tags -> implode('name', ', '),
                'body' => $post -> body,
                'slug' => $post -> slug,
                'status' => $post -> status,
            ];
        }

        return [
            'posts' => $pagesPosts,
            'page' => $posts -> currentPage()
        ];
    }

    public function getPost(string $slug, Request $request) {

        $user = $request -> user();

        $post = Post::where(['slug' => $slug, 'authorId' => $user -> id]) -> first();

        if (!$post) {
            return response() -> json(['error' => '404 Not found'], 404);
        }

        return [
            'post' => [
                'id' => $post -> id,
                'title' => $post -> title,
                'createdAt' => $post -> createdAt,
                'authorName' => $post -> author -> name,
                'tags' => $post -> tags -> implode('name', ', '),
                'body' => $post -> body,
                'slug' => $post -> slug,
                'status' => $post -> status,
            ]
        ];
    }

    public function deletePost(string $slug, Request $request) {

        $user = $request -> user();

        $post = Post::where(['slug' => $slug, 'authorId' => $user -> id]) -> first();

        if (!$post) {
            return response() -> json(['error' => '404 Not found'], 404);
        }

        $post -> delete();

        return response() -> json(['message' => 'Post deleted successfully'], 200);
    }

    public function createPost(Request $request) {
        $user = $request -> user();

        $request -> validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'status' => 'in:PUBLISHED,DRAFT',
            'tags' => 'string|max:255'
        ]);

        $post = new Post();

        if (!$request -> has('status')) {
            $post -> status = 'DRAFT';
        }

        $post -> title = $request -> input('title');
        $post -> body = $request -> input('body');
        $post -> authorId = $user -> id;

        // Gerar slug com base no title
        $post -> slug = Str::slug($post -> title) . '-' . time();

        $post -> save();

        if($request -> has('tags')) {
            $tags = explode(',', $request -> input('tags'));
            foreach($tags as $tag){
                $tag = trim($tag);
                $tagModel = Tag::firstOrCreate(['name' => $tag]);
                $post -> tags() -> attach($tagModel -> id);
            }
        }

        return response() -> json([
            'post' => [
                'id' => $post -> id,
                'title' => $post -> title,
                'createdAt' => $post -> createdAt,
                'authorName' => $post -> author -> name,
                'tags' => $post -> tags -> implode('name', ', '),
                'body' => $post -> body,
                'slug' => $post -> slug,
                'status' => $post -> status,
            ]
        ], 201);
    }
}
