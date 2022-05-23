<?php

namespace App\Http\Resources\FolderGroup;

use App\Http\Resources\Folder\FolderResource;
use App\Http\Resources\Subdepartment\SubdepartmentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FolderGroupResource extends JsonResource
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
            'serie' => $this->serie,
            'status' => $this->estatus,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'subdepartment' => new SubdepartmentResource($this->subdepartment),
            'folders' => FolderResource::collection($this->folders),
        ];
    }
}
