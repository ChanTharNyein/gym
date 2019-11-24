<?php

namespace App\Http\Resources;
use App\Http\Resources\UserResource as UserResource;
use App\Http\Resources\TrainerResource as TrainerResource;
use App\Trainer;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderPackageResource extends JsonResource
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
            'user_id' =>$this->user_id,
            /*'package_id' => new UserResource(User::find($this->package_id)),
            'trainer_id' => new TrainerResource(Trainer::find($this->trainer_id)),*/
            'package_id' => $this->package_id,
            'trainer_id' => $this->trainer_id,
            'phone' => $this->phone,
            'appointment_date' => $this->appointment_date,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
