<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

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
            'role' => $this->role,
            'thumbnail_url' => 'https://picsum.photos/100',
            'status' => $this->status,
            'cover_path' => $this->cover_path,
            'thumbnail_path' => $this->thumbnail_path,
            'description' => Str::words($this->about, 10),
            'auto_approval' => $this->auto_approval,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
