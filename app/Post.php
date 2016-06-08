<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =
        [
            'user_id',
            'category_id',
            'content',
            'image_path'
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected $uploads = '/categories_posts/public/posts_image/';

    public function getImagePathAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
