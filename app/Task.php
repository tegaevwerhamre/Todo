<?php


namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent;
use SoftDeletes;

class Task extends Eloquent
{
    //public $timestamps = false;
    //protected $softDelete = true;
    

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
