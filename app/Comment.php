<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Comment extends Model
{
    protected $guarded = ['id'];
    public function post()
    {
        return $this->belongsTo(Movie::class);
    }
}