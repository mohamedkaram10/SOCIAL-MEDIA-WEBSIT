<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'about' => $this->about,
            'user_id' => $this->user_id,
            'cover_path' => $this->cover_path,
            'thumbnail_path' => $this->thumbnail_path,
            'auto_approval' => $this->auto_approval,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
