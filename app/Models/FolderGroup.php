<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FolderGroup
 *
 * @property $id
 * @property $subdepartment_id
 * @property $serie
 * @property $created_at
 * @property $updated_at
 *
 * @property Borrow[] $borrows
 * @property Folder[] $folders
 * @property Subdepartment $subdepartment
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FolderGroup extends Model
{
    
    static $rules = [
		'subdepartment_id' => 'required',
		'serie' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subdepartment_id','serie'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function borrows()
    {
        return $this->hasMany('App\Models\Borrow', 'folder_group_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function folders()
    {
        return $this->hasMany('App\Models\Folder', 'folder_group_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subdepartment()
    {
        return $this->hasOne('App\Models\Subdepartment', 'id', 'subdepartment_id');
    }
    

}
