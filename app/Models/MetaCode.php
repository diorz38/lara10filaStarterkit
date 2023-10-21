<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaCode extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meta_codes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
            'parent_id',
            'nama',
            'kode'
        ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the parent for this model.
     *
     * @return App\Models\MetaCode
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\MetaCode','parent_id');
    }



}
