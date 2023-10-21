<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penduduk';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nik';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
            'nik',
            'nkk',
            'nama',
            'jkel_id',
            'tempat_lahir',
            'tgl_lahir',
            'status_kawin_id',
            'agama_id',
            'ijasah_id',
            'pekerjaan_id',
            'gol_darah_id',
            'hub_id',
            'alamat_ktp',
            'status_warga_id',
            'warganegara_id',
            'sls_id',
            'is_present',
            'created_by',
            'updated_by'
        ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['tgl_lahir'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['tgl_lahir' => dates];

    /**
     * Get the jkel for this model.
     *
     * @return App\Models\MetaCode
     */
    public function jkel()
    {
        return $this->belongsTo('App\Models\MetaCode','jkel_id','kode');
    }

    /**
     * Get the sl for this model.
     *
     * @return App\Models\Sls
     */
    public function sl()
    {
        return $this->belongsTo('App\Models\Sls','sls_id');
    }

    /**
     * Get the creator for this model.
     *
     * @return App\Model\User
     */
    public function creator()
    {
        return $this->belongsTo('App\Model\User','created_by');
    }

    /**
     * Get the updater for this model.
     *
     * @return App\Modoel\User
     */
    public function updater()
    {
        return $this->belongsTo('App\Modoel\User','updated_by');
    }

    /**
     * Set the tgl_lahir.
     *
     * @param  string  $value
     * @return void
     */
    public function setTglLahirAttribute($value)
    {
        $this->attributes['tgl_lahir'] = !empty($value) ? \DateTime::createFromFormat('Y-m-d', $value) : null;
    }

    /**
     * Get tgl_lahir in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getTglLahirAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('Y-m-d');
    }

    /**
     * Get created_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('Y-m-d');
    }

}
