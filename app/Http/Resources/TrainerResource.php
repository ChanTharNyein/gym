<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainerResource extends JsonResource
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
            'name' => $this->name,
            'image' => $this->image,
            'description' => $this->description,
            'facebook' => $this->facebook,
            'gmail' => $this->gmail,
            'instagram' => $this->instagram,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
