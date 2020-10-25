<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}