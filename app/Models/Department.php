<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 *
 * @property $id
 * @property $office_id
 * @property $nombre
 * @property $identificador_interno
 * @property $created_at
 * @property $updated_at
 *
 * @property Office $office
 * @property Subdepartment[] $subdepartments
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Department extends Model
{
    
    static $rules = [
		'office_id' => 'required',
		'nombre' => 'required',
		'identificador_interno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['office_id','nombre','identificador_interno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function office()
    {
        return $this->hasOne('App\Models\Office', 'id', 'office_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subdepartments()
    {
        return $this->hasMany('App\Models\Subdepartment', 'department_id', 'id');
    }
    

}
