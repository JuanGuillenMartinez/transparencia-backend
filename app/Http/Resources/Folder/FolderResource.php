<?php

namespace App\Http\Resources\Folder;

use App\Http\Resources\FolderCover\FolderCoverResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FolderResource extends JsonResource
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
            'legajo' => $this->legajo,
            'subserie' => $this->subserie,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'folder_information' => new FolderCoverResource($this->folderCover),
        ];
    }
}
