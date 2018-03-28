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

    public function phrases()
    {
        return $this->hasMany('App\Phrase', 'user_id', 'id');
    }

    public function faceTokens()
    {
        return $this->hasMany('App\FaceToken', 'user_id', 'id');
    }
}
