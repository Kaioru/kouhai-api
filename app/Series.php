<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
    ];

    public $validation = [
        'title' => ['required'],
        'description' => ['required'],
    ];

    /**
     * Get the productions for the series.
     */
    public function productions()
    {
        return $this->hasMany('App\Production');
    }
    /**
     * Get the user that created the series.
     */
    public function creator()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the user that updated the series.
     */
    public function updater()
    {
        return $this->belongsTo('App\User');
    }
}
