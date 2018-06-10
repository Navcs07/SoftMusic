<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['link', 'post_id', 'name', 'type'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
