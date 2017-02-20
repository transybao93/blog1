<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * [set table to posts]
     */
    protected $table = "tags";
    /**
     * [set timestamps default data]
     */
    public $timestamps = true;
}
