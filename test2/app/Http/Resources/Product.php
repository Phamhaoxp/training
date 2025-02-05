<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'tensp'=> $this->name,
            'gia'=> $this->price,
            'create_at'=> $this->create_at,
            'update_at'=> $this->update_at,
        ];
    }
}
