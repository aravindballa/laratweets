<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{

    protected $fillable = [
        'text', 'stars'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
