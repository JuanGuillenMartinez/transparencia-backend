<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Borrow
 *
 * @property $id
 * @property $folder_group_id
 * @property $person_id
 * @property $fecha_devolucion
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property FolderGroup $folderGroup
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Borrow extends Model
{
    
    static $rules = [
		'folder_group_id' => 'required',
		'person_id' => 'required',
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folder_group_id','person_id','fecha_devolucion','estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function folderGroup()
    {
        return $this->hasOne('App\Models\FolderGroup', 'id', 'folder_group_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'person_id');
    }
    

}
