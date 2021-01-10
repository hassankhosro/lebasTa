<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Group extends Model
{
    use HasFactory,SoftDeletes, CascadeSoftDeletes;

    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['categories', 'advertisements'];


    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }
    public function advertisements()
    {
        return $this->hasMany('App\Models\Advertisement');
    }
}
