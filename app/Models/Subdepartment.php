<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subdepartment
 *
 * @property $id
 * @property $department_id
 * @property $nombre
 * @property $identificador_interno
 * @property $created_at
 * @property $updated_at
 *
 * @property Department $department
 * @property FolderGroup[] $folderGroups
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subdepartment extends Model
{
    
    static $rules = [
		'department_id' => 'required',
		'nombre' => 'required',
		'identificador_interno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['department_id','nombre','identificador_interno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department()
    {
        return $this->hasOne('App\Models\Department', 'id', 'department_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function folderGroups()
    {
        return $this->hasMany('App\Models\FolderGroup', 'subdepartment_id', 'id');
    }
    

}
