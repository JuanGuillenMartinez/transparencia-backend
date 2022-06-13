<?php

namespace App\Http\Resources\Borrow;

use App\Http\Resources\FolderGroup\FolderGroupResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BorrowResource extends JsonResource
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
            'folder_group' => new FolderGroupResource($this->folderGroup),
            'person' => $this->person,
            'fecha_devolucion' => $this->fecha_devolucion,
            'estatus' => $this->estatus,
            'prestado_el' => $this->created_at,
        ];
    }
}
