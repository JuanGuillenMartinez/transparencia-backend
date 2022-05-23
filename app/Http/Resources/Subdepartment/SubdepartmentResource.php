<?php

namespace App\Http\Resources\Subdepartment;

use Illuminate\Http\Resources\Json\JsonResource;

class SubdepartmentResource extends JsonResource
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
            'identificador_interno' => $this->identificador_interno,
            'create_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
