<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{   protected $PostService;
    public function __construct(PostService $PostService){
        $this->PostService = $PostService;
    }
    public function index()
    {
        return $this->PostService->index();
    }
    public function create()
    {
        return $this->PostService->create();
    }
    public function store(Request $request)
    {
        return $this->PostService->store($request);
    }  
    public function edit(Post $post)
    {
        return $this->PostService->edit($post);
    }
    public function update(Request $request,Post $post)
    {
        return $this->PostService->update($request,$post);
    }
    public function destroy(Post $post)
    {
        return $this->PostService->destroy($post);
    }
}
