<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'title', 'description', 'thumbnail', 'imagelink', 'user_id'
    ];
}
