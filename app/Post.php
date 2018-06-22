<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'img','author','title','heart','body'
    ];

    protected $hidden = [
        'remember_token',
    ];
}
