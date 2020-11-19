<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meson extends Model
{
    use HasFactory;

    public function user()
{
    return $this->belongsTo('App\Models\User');
}

public function advertisements()
{
    return $this->hasMany('App\Models\Advertisement');
}



}
