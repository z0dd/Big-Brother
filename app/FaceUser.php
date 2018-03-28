<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaceUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'master_token',
    ];
}
