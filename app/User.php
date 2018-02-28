<?php

namespace App;

use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }
}
