<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments():Hasmany
{
 return $this->hasMany(Comment::class);
}

public function user():BeLongsTo
{
 return $this->BeLongsTo(user::class);
}
}
