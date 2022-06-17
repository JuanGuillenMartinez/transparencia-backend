<?php

namespace App\Http\Resources\FolderCover;

use Illuminate\Http\Resources\Json\JsonResource;

class FolderCoverResource extends JsonResource
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
            "area" => $this->area,
            "asunto" => $this->asunto,
            "fecha_inicio" => $this->fecha_inicio,
            "fecha_terminacion" => $this->fecha_terminacion,
            "valor_documental" => $this->valor_documental,
            "conservacion_tramite" => $this->conservacion_tramite,
            "conservacion_concentracion" => $this->conservacion_concentracion,
            "conservacion_acceso" => $this->conservacion_acceso,
            "conservacion_desclasificacion" => $this->conservacion_desclasificacion,
            "clasificacion_informacion" => $this->clasificacion_informacion,
            "expediente" => $this->expediente,
            "localizacion" => $this->localizacion,
        ];
    }
}
