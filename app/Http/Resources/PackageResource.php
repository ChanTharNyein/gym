<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'service1' => $this->service1,
            'service2' => $this->service2,
            'service3' => $this->service3,
            'service4' => $this->service4,
            'service5' => $this->service5,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
