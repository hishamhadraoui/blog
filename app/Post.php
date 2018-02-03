<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'body', 'user_id'];

    public function path()
    {
    	return '/posts/'. $this->id;
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
