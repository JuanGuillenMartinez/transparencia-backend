<?php

namespace App\Http\Resources\Office;

use App\Http\Resources\Department\DepartmentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OfficeResource extends JsonResource
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
            'id' => $this->id,
            'nombre' => $this->nombre,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'departments' => DepartmentResource::collection($this->departments),
        ];
    }
}
