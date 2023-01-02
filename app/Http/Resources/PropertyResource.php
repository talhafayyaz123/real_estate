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
            'name' => $this->resource->name,
            'number' => $this->resource->number,
            'description' => $this->resource->description,
            'price' => $this->resource->price,
            'country' => $this->resource->country,
            'area' => $this->resource->area,
            'type' => $this->resource->type,
            'status' => $this->resource->status == 1 ? true : false,
            'property_image' => $this->resource->property_image,
            'user_id' => $this->resource->user_id
        ];
    }
}
