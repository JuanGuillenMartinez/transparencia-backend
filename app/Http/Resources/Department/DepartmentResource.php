<?php

namespace App\Http\Resources\Department;

use App\Http\Resources\Subdepartment\SubdepartmentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'subdepartments' => SubdepartmentResource::collection($this->subdepartments),
        ];
    }
}
