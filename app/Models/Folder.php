<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Folder
 *
 * @property $id
 * @property $folder_group_id
 * @property $legajo
 * @property $subserie
 * @property $created_at
 * @property $updated_at
 *
 * @property FolderCover[] $folderCovers
 * @property FolderGroup $folderGroup
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Folder extends Model
{
    
    static $rules = [
		'folder_group_id' => 'required',
		'legajo' => 'required',
		'subserie' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folder_group_id','legajo','subserie'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function folderCover()
    {
        return $this->hasOne('App\Models\FolderCover', 'folder_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function folderGroup()
    {
        return $this->hasOne('App\Models\FolderGroup', 'id', 'folder_group_id');
    }
    

}
