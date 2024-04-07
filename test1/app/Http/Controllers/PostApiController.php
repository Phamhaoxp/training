<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PostResource;
class PostApiController extends Controller
{
    protected $PostService;
    public function __construct(PostService $PostService){
        $this->PostService = $PostService;
    }
    public function index()
    {
        $PostService = $this->PostService->index();
        $arr = [
            'status'=>true,
            'message'=>'Noi dung',
            'data'=>PostResource::collection($PostService),
        ];
        return response()->json($arr,200);
    }
    public function store(Request $request)
    {
        $input = $this->PostService->store($request)->all(); 
        $validator = Validator::make($input, [
            'title' => 'required',
            'content' => 'required'
            ]);
        if($validator->fails()){
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
                ];
            return response()->json($arr, 200);
        }
        $PostService = $this->PostService->create();
        $arr = [
            'status' => true,
            'message'=>"Thông tin đã lưu thành công",
            'data'=> new PostResource($PostService)
        ];
        return response()->json($arr, 201);
        
    }
}
