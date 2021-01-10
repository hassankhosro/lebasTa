<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Meson extends Model
{
    use HasFactory,SoftDeletes, CascadeSoftDeletes;

    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['advertisements'];

    public function user()
{
    return $this->belongsTo('App\Models\User');
}

public function advertisements()
{
    return $this->hasMany('App\Models\Advertisement');
}



}
