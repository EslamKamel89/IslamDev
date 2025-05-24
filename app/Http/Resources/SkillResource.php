<?php

namespace App\Http\Resources;

use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id' => $this->id,
            "skill_category_id" => $this->skill_category_id,
            "name" => $this->name,
            "slug" => $this->slug,
            "emoji" => $this->emoji,
            "icon" => $this->icon,
            "image" => $this->image,
            "proficiency" => $this->proficiency,
            'description' => LocalizationResource::collection($this->whenLoaded('description')),
            'category' => SkillCategoryResource::make($this->whenLoaded('category')),
        ];
    }
}
