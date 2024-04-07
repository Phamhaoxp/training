<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class PostController extends Controller
{   
    protected $postRepository;
    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }
    public function index()
    {
        $posts = $this->postRepository->all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->postRepository->create($request->all());

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $this->postRepository->update($post, $request->all());

        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        $this->postRepository->delete($post);

        return redirect()->route('post.index');
    }
}
