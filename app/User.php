<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable =
        [
            'name',
            'password'
        ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
