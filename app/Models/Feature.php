<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Feature extends Model
{
    use HasFactory,SoftDeletes, CascadeSoftDeletes;

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function advertisements()
    {
        return $this->belongsToMany('App\Models\Advertisement');
    }
}
