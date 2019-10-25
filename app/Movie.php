<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'title', 'year', 'genre', 'director', 'storyline'
    ];

    protected $guarded = ['id'];
    public function comments()
    {   
        return $this->hasMany(Comment::class);
    }
}
