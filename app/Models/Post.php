<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content_1', 'content_2', 'category_id', 'image_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function getDates()
    {
        return array('created_at', 'updated_at');
    }
    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }
    public function getUpdatedAtAttribute($date)
    {
        return new Date($date);
    }
}
