<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            "id" => $this->id,
            "slug" => $this->slug,
            "thumbnail" => $this->thumbnail,
            "live_url" => $this->live_url,
            "github_url" => $this->github_url,
            "start_date" => $this->start_date,
            "end_date" => $this->end_date,
            "is_featured" => (bool)$this->is_featured,
            "order" => $this->order,
            "status" => $this->status,
            'videos' => $this->videos ? json_decode($this->videos) : [],
            'images' => $this->images ? json_decode($this->images) : [],
            "title" =>  LocalizationResource::collection($this->whenLoaded('title')),
            'description' => LocalizationResource::collection($this->whenLoaded('description')),
            'features' => LocalizationResource::collection($this->whenLoaded('features')),
            'skills' => SkillResource::collection($this->whenLoaded('skills')),
        ];
    }
}
