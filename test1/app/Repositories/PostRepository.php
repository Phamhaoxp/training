<?php
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface{
    public function all()
    {
        return Post::all();
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update($post, array $data)
    {
        $post->update($data);

        return $post;
    }

    public function delete ($post)
    {
        $post->delete();
    }
}