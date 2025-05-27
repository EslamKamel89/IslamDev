<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id' => $this->id,
            'rating' => $this->rating,
            "quote" => LocalizationResource::collection($this->whenLoaded('quote')),
            "name" => LocalizationResource::collection($this->whenLoaded('name')),
            "title" => LocalizationResource::collection($this->whenLoaded('title')),
            "contact" => LocalizationResource::collection($this->whenLoaded('contact')),
        ];
    }
}
