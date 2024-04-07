<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'chu de'=>$this->title,
            'noi dung'=>$this->content,
            'create_at'=> $this->create_at,
            'update_at'=> $this->update_at,
        ];
    }
}
