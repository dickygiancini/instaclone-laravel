<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    //
    protected $fillable = [
        'user_id', 'post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }
}
