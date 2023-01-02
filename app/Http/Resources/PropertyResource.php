<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'number' => $this->number,
            'description' => $this->description,
            'price' => $this->price,
            'type' => $this->type,
            'status' => $this->status == 1 ? true : false,
            'property_image' => $this->property_image,
            'user_id' => $this->user_id
        ];
    }
}
