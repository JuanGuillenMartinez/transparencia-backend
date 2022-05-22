<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FolderCover
 *
 * @property $id
 * @property $folder_id
 * @property $area
 * @property $asunto
 * @property $fecha_inicio
 * @property $fecha_terminacion
 * @property $valor_documental
 * @property $conservacion_tramite
 * @property $conservacion_concentracion
 * @property $conservacion_acceso
 * @property $conservacion_desclasificacion
 * @property $clasificacion_informacion
 * @property $expediente
 * @property $localizacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Folder $folder
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FolderCover extends Model
{
    
    static $rules = [
		'folder_id' => 'required',
		'area' => 'required',
		'asunto' => 'required',
		'fecha_inicio' => 'required',
		'fecha_terminacion' => 'required',
		'valor_documental' => 'required',
		'conservacion_tramite' => 'required',
		'conservacion_concentracion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folder_id','area','asunto','fecha_inicio','fecha_terminacion','valor_documental','conservacion_tramite','conservacion_concentracion','conservacion_acceso','conservacion_desclasificacion','clasificacion_informacion','expediente','localizacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function folder()
    {
        return $this->hasOne('App\Models\Folder', 'id', 'folder_id');
    }
    

}
